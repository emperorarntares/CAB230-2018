<!-- Review Page. -->
<?php
	session_start();
	if(isset($_SESSION['user_session']))
	{
		require_once("class.user.php");
		$auth_user = new USER();
		
		$userID = $_SESSION['user_session'];
		
		$stmt = $auth_user->runQuery("SELECT * FROM users WHERE userID=:userID");
		$stmt->execute(array(":userID"=>$userID));
		
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	}
?>

<!DOCTYPE html>

<html>

<head>
	<title>WiFi location review - WiFind</title>
	<?php include 'includes/head.php';?>
	<?php include 'includes/metaData_iOS.php';?>
	<?php include 'includes/metaData_android.php'; ?>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
		integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
		crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
		integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
		crossorigin=""></script>
</head>

<!-- Include Microdata -->
<body onload='showMapReview()' itemscope itemtype="http://schema.org/Review">

<!-- Container to hold the page together to avoid overlapping -->
<div id="main-container">
	<!-- Header/Nav -->
	<?php include 'includes/nav.php'; ?>
	
	<?php
	//Connecting to database
		$servername = "localhost";
		$dbname = "n9934731";
		$username = "root";
		$password = "";
		$pdo_conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		
		$name = $_GET["name"];
		$query = "SELECT  locations.locationID, locations.name, locations.address, locations.suburb, locations.latitude, locations.longitude, locations.rating, locations.image FROM locations WHERE locations.name = '$name';";
		$pdo_statement = $pdo_conn->prepare($query);
		$pdo_statement->execute();
		$result = $pdo_statement->fetchAll();
		

		//Displaying results from query
		if(!empty($result)) { 
				foreach($result as $row) {
		?>
		<!-- Details of location -->
		<div class='individualPageInfo'>
			<div class='innerInfo'>
				<img itemprop="image" id="placeImage" src="./images/<?php echo $row['image']?>" alt="image of location"/>
				
				<div itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing">
					<h1 itemprop="name"><?php echo $row['name'] ?></h1>
				</div>
				
				<div id='ratingReview' class='rating'>
					<label><?php echo $row['rating'] ?>/5</label>
					<span class='fa fa-star checked'></span>
				</div>
				<div id='individualInfo'>
				
					<h3>Address:</h3>
					<p id='address'><?php echo $row['address']. ', '. $row['suburb'] ?></p>
					
					<br/>
					
					<div itemscope itemtype="http://schema.org/Place">
						<div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
							<div id='mapReview'></div>
							<p itemprop="latitude" id='latR'><?php echo $row['latitude'] ?></p>
							<p  itemprop="longitude" id='longR'><?php echo $row['longitude'] ?></p>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php $location = $row['locationID'];
		}
		}
		?>
		<!-- Reviews for location -->
		<div class='individualPageInfo2'>
			<div class='innerInfo2'>
				<h2>Reviews</h2>
				<div id='reviewTable'>
					<table>
					<?php
					if(isset($_SESSION['user_session'])) {
					?>
					<form id='review_reviewpage' method='post' action='review.php?name=<?php echo $_GET['name'] ?>'>
							<tr>
								<td>
									<img id='profile' src='./images/<?php echo $userRow['profileImage'] ?>' alt='profile picture'>
									<p><?php echo $userRow['username'] ?></p>
								</td>
							<td>
									<textarea name='titleReview' rows='1' cols='100' placeholder='Title here.'></textarea>
									<textarea name='commentReview' rows='10' cols='100' placeholder='Please write your review here.'></textarea>
									<div id='ratingReview' class='rating'>
									<label>Select a rating:</label>
									<select name='reviewRating'>
										<option value='0'>0/5</option>
										<option value='1'>1/5</option>
										<option value='2'>2/5</option>
										<option value='3'>3/5</option>
										<option value='4'>4/5</option>
										<option value='5'>5/5</option>
									</select>
									<span class='fa fa-star checked'></span>
									</div>
									<input id='submitReview' action="review.php" type='submit' name='submitReview' value='Submit Review' method='post'>
								</form>
								<?php
									if(isset($_POST['submitReview']))
									{
									// prepare sql and bind parameters
										$query = "INSERT INTO reviews (userID, locationID, title, comment, reviewRating) VALUES (:userID, :location, :title, :comment, :rating)";
										$pdo_statement = $pdo_conn->prepare($query);
										$pdo_statement ->bindParam(':userID', $userID);
										$pdo_statement ->bindParam(':location', $location);
										$pdo_statement ->bindParam(':title', $title);
										$pdo_statement ->bindParam(':comment', $comment);
										$pdo_statement ->bindParam(':rating', $rating);
										
									//insert row
										$userID = $userRow['userID'];
										$title = htmlspecialchars($_POST['titleReview'], ENT_QUOTES, 'UTF-8');
										$comment = htmlspecialchars($_POST['commentReview'], ENT_QUOTES, 'UTF-8');
										$rating = $_POST['reviewRating'];
										$pdo_statement->execute();
									}
					}
					else {
					?>
					<input id='review' type='button' name='signIn' class='button_active' onclick="location.href='login.php';" value='Sign in to make a review' />
					<?php
					}
					$query = "SELECT title, comment, username, profileImage, reviewRating, date FROM reviews, users Where reviews.locationID = $location AND reviews.userID = users.userID";
					$pdo_statement = $pdo_conn->prepare($query);
					$pdo_statement->execute();
					$result = $pdo_statement->fetchAll();
					
					//Displaying results from query
					if(!empty($result)) { 
						foreach($result as $row) {
					?>
						</td>
							</tr>
								<tr>
									<td>
										<img id='profile' src='./images/<?php echo $row['profileImage'] ?>' alt='profile picture'>
										<div itemprop="author" itemscope="" itemtype="http://schema.org/Person">
											<p itemprop="name"><?php echo $row['username'] ?></p>
										</div>
									</td>
									<td>
										<h4><?php echo $row['title'] ?></h4>
										
										<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
											<div id='ratingReview' class='rating'>
											<label itemprop="ratingValue"><?php echo $row['reviewRating'] ?>/5</label>
											<span class='fa fa-star checked'></span>
											</div>
											<hr>
											<p itemprop="description"><?php echo $row['comment'] ?></p>
										</div>
										
										<p id='posted' itemprop="datePublished"><?php echo $row['date'] ?></p>
										
									</td>
								</tr>
							<?php 
							}
						}
						?>
					</table>
				</div>
			</div>
		</div>

	<!-- Footer -->
	<?php 
	include 'includes/footer.php';
	?>
</div>

</body>
</html>
