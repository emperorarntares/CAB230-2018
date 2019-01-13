<!-- Results page -->
<?php
	session_start();
	define("ROW_PER_PAGE",10);
	include('dbconfig.php');
?>

<?php
	global $search_keyword;
	$search_keyword = '';

	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
		$sql = 'SELECT * FROM locations WHERE name LIKE :keyword OR address LIKE :keyword OR suburb LIKE :keyword ';
	}
	elseif(!empty($_POST['suburb']['keyword'])) {
		$search_keyword = $_POST['suburb']['keyword'];
		if($search_keyword == 'Current Location'){
			$sql = "SELECT * FROM locations";
		}
		else {
			$sql = 'SELECT * FROM locations WHERE suburb LIKE :keyword ';
		}
	}
	elseif(!empty($_POST['rating']['keyword'])) {
		$search_keyword = $_POST['rating']['keyword'];
		$sql = 'SELECT * FROM locations WHERE rating LIKE :keyword ';
	}
	else{
		$sql = 'SELECT * FROM locations';
	}
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * ROW_PER_PAGE;
	}
	$limit=" limit " . $start . "," . ROW_PER_PAGE;
	$pagination_statement = $pdo_conn->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();

	$row_count = $pagination_statement->rowCount();
	if(!empty($row_count)){
		$per_page_html .= "<div id='pageNo'>";
		$page_count=ceil($row_count/ROW_PER_PAGE);
		if($page_count>1) {
			for($i=1;$i<=$page_count;$i++){
				if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="currentPage" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="pagination" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}
	
	$query = $sql.$limit;
	$pdo_statement = $pdo_conn->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search results - WiFind</title>
	<?php 
	include 'includes/head.php';
	include 'includes/metaData_iOS.php';
	include 'includes/metaData_android.php';
	if($search_keyword == 'Current Location'){
		echo "<script type='text/javascript'>getLocation();</script>";
	}
	?>
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
		integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
		crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
		integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
		crossorigin=""></script>
</head>
<body onload='map()'>

<!-- Container to hold the page together to avoid overlapping -->
<div id="main-container">
	<!-- Header/Nav -->
	<?php include 'includes/nav.php'; ?>
	
	<form name='frmSearch' action='' method='post'>
	
	<!-- Secondary nav bar -->
	<div class="resultsPageInfo">
		<div id="nav-title">
			<h1>Brisbane City WiFi Locations</h1>
			<?php 
				if(isset($_GET["lat"])){
					echo "<p>Locations listed are within 5km from your current location.</p>";
					echo "<p>Please go through other the pages to see more locations.</p>";
				}
			?>
		</div>
				
		<!--This splits in three sections: one is for results, one for map and for page numbers-->
		<div id="section1">
			<div id="mapid"></div>
			<!-- Wraps all items -->
			<div id="result-suggestion">
			<?php
			if(!empty($result)) { 
				if(isset($_GET["lat"])){
				$i = 1;
				foreach($result as $row) {
				//Find locations a few kilometres from current location
					$lat1 = $_GET["lat"];
					$lon1 = $_GET["lon"];
					$lat2 = $row['latitude'];
					$lon2 = $row['longitude'];
					$R = 6371;
					$angleone = $lat1 * (3.14159 / 180);
					$angletwo = $lat2 * (3.14159 / 180);
					$anglediff = ($lat2-$lat1) * (3.14159 / 180);
					$londiff = ($lon2-$lon1) * (3.14159 / 180);
					$a = sin($anglediff/2) * sin($anglediff/2) + cos($angleone) * cos($angletwo) * sin($londiff/2) * sin($londiff/2);
					$b = 2 * atan2(sqrt($a), sqrt(1-$a));
					$distance = $R * $b;
						
					if(abs($distance) < 5){
				?>
				<div id="results">
					<div id="left-section">
						<div id="bug-fix"><form action='review.php?name=<?php echo $row['name']; ?>' method='post' ></form></div>
						<table class="item">
							<tr>
								<th class="item-image">
									<img class="img" src='./images/<?php echo $row['image']; ?>' alt='location image'></a>
								</th>
								<th class="item-description">
									<h2 id="locName<?php echo $i; ?>"><?php echo $row['name']; ?></h2>
									<p><?php echo $row['address']; ?>, <?php echo $row['suburb']; ?></p>
									<br><br>
									<div id='ratingResult' class='rating'>
										<label><?php echo $row['rating']; ?>/5</label>
										<span class='fa fa-star checked'></span>
									</div>
									<p class="lat" id='lat<?php echo $i; ?>'><?php echo $row["latitude"] ?></p>
									<p class="long" id='long<?php echo $i; ?>'><?php echo $row["longitude"] ?></p>
									<?php 
										$sql2 = "SELECT COUNT(reviewID) as numberOfReviews FROM reviews WHERE reviews.locationID =". $row['locationID'];
										$reviewNo = $pdo_conn->prepare($sql2);
										$reviewNo->execute();
										foreach($reviewNo as $num){
											echo "<p>". $num['numberOfReviews']. " Reviews</p>
											<br>";}
									?>
									<form action='review.php?name=<?php echo $row['name']; ?>' method='post' >
									<input id='review' type='submit' name = 'review' value= 'Visit Review Page'>
									</form>
								</th>
							</tr>
						</table>	
					</div>						
				</div>				
				<?php
				$i = $i +1;
					}	
					}
					}
				else{
				$i = 1; 
					foreach($result as $row) {
				?>					
				<div id="results">
					<div id="left-section">
						<div id="bug-fix"><form action='review.php?name=<?php echo $row['name']; ?>' method='post' ></form></div>
						<table class="item">
							<tr>
								<th class="item-image">
									<img class="img" src='./images/<?php echo $row['image']; ?>' alt='location image'></a>
								</th>
								<th class="item-description">
									<h2 id="locName<?php echo $i; ?>"><?php echo $row['name']; ?></h2>
									<p><?php echo $row['address']; ?>, <?php echo $row['suburb']; ?></p>
									<br><br>
									<div id='ratingResult' class='rating'>
										<label><?php echo $row['rating']; ?>/5</label>
										<span class='fa fa-star checked'></span>
									</div>
									<p class="lat" id='lat<?php echo $i; ?>'><?php echo $row["latitude"] ?></p>
									<p class="long" id='long<?php echo $i; ?>'><?php echo $row["longitude"] ?></p>
									<?php 
										$sql2 = "SELECT COUNT(reviewID) as numberOfReviews FROM reviews WHERE reviews.locationID =". $row['locationID'];
										$reviewNo = $pdo_conn->prepare($sql2);
										$reviewNo->execute();
										foreach($reviewNo as $num){
											echo "<p>". $num['numberOfReviews']. " Reviews</p>
											<br>";}
									?>
									<form action='review.php?name=<?php echo $row['name']; ?>' method='post' >
										<input id='review' type='submit' name = 'review' value= 'Visit Review Page'>
									</form>
								</th>
							</tr>
						</table>	
					</div>					
				</div>				
			<?php
			$i = $i +1;
				}
				}
				}
			else{
			?>
			<div id="results">
				<div id="left-section">
					<h2>Sorry, no results were found. '<?php echo htmlspecialchars($_POST['search']['keyword'], ENT_QUOTES, 'UTF-8'); ?>' did not match any of the records in the database.</h2>
				</div>
			</div>
			<?php
			}
			?>
			</div>
	<?php echo $per_page_html; ?>
	</form>
	</div>	
	</div>

	<!-- Footer -->
	<?php 
	include 'includes/footer.php';
	?>
</div>

</body>
</html>