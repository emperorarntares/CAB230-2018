<!-- Home Page -->
<?php
	session_start();
	$search_keyword = '';
?>

<!DOCTYPE html>
<html>

<head>
	<title>WiFi Hotspots in Brisbane - WiFind</title>
	<?php include 'includes/head.php'; ?>
	<?php include 'includes/metaData_iOS.php'; ?>
	<?php include 'includes/metaData_android.php'; ?>
</head>

<body>

<!-- Container to hold the page together to avoid overlapping -->
<div id="main-container">

	<!-- Background image sits behind content -->
	<div id="background">
		<!-- Navigation bar for home page-->
		<div id="homeHeader">
			<div id="nav">
			
			<?php if(isset($_SESSION['user_session'])): ?>
				<a href="logout.php?logout=true">Logout</a>
				<a href="profile.php">My Profile</a>
			<?php else: ?>
				<a href="register.php">Sign Up</a>
				<a href="login.php">Login</a>
			<?php endif; ?>
				
			</div>
		</div>	
		<div id="main-content">
			
		<!-- Logo image -->
			<div id="logo">
				<img src="./images/logo.gif" alt="WiFind Logo">
			</div>
		<!-- Logo subtitle -->	
			<p id="subtitle">Wifi Hotspots Across Brisbane</p>
			
		<!-- Search bar -->			
		<form name='frmSearch' action="results.php" method='post'>
			<div id="form_group1">
				<label>Find</label>
				<input id="find" type="text" size="34" name='search[keyword]' value="<?php echo $search_keyword; ?>" placeholder="wifi hotspots at shops, libraries, parks..."/>
			</div>
		
		<!-- Location dropdown list  -->
			<div id="form_group2">
			  <label>Location</label> 
				  <select class="suburb" name="suburb[keyword]">
					<option value="">Please choose a location</option>
					<option value="<?php echo $search_keyword = 'Current Location'; ?>" id='current'>Current Location</option>
					<option value="<?php echo $search_keyword = 'Annerley'; ?>">Annerley, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Ashgrove'; ?>">Ashgrove, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Banyo'; ?>">Banyo, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Bellbowrie'; ?>">Bellbowrie, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Bracken Ridge'; ?>">Bracken Ridge, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Brisbane'; ?>">Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Brisbane City'; ?>">Brisbane City, QLD</option>
					<option value="<?php echo $search_keyword = 'Bulimba'; ?>">Bulimba, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Calamvale'; ?>">Calamvale, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Carina'; ?>">Carina, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Carindale'; ?>">Carindale, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Chermside'; ?>">Chermside, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Clayfield'; ?>">Clayfield, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Coopers Plains'; ?>">Coopers Plains, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Corinda'; ?>">Corinda, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Everton Park'; ?>">Everton Park, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Fairfield'; ?>">Fairfield, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Fitzgibbon'; ?>">Fitzgibbon, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Forest Lake'; ?>">Forest Lake, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Grange'; ?>">Grange, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Hamilton'; ?>">Hamilton, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Holland Park'; ?>">Holland Park, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Holland Park West'; ?>">Holland Park West, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Inala'; ?>">Inala, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Indooroopilly'; ?>">Indooroopilly, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Kenmore'; ?>">Kenmore, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'MacGregor'; ?>">MacGregor, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Mitchelton'; ?>">Mitchelton, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Mt Gravatt'; ?>">Mt Gravatt, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Mt Ommaney'; ?>">Mt Ommaney, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'New Farm'; ?>">New Farm, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Nundah'; ?>">Nundah, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Paddington'; ?>">Paddington, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Sandgate'; ?>">Sandgate, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Seventeen Mile Rocks'; ?>">Seventeen Mile Rocks, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'St Lucia'; ?>">St Lucia, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Stones Corner'; ?>">Stones Corner, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Sunnybank Hills'; ?>">Sunnybank Hills, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Toowong'; ?>">Toowong, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Upper Mount Gravatt'; ?>">Upper Mount Gravatt, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'West End'; ?>">West End, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Wynnum'; ?>">Wynnum, Brisbane, QLD</option>
					<option value="<?php echo $search_keyword = 'Zillmere'; ?>">Zillmere, Brisbane, QLD</option>
				  </select>
				</div>
			<!-- Rating bar for more detailed search results -->
				<div id="form_group3" class="rating">
				<label>Rating</label>
						<select name="rating[keyword]">
							<option value=''>Select a rating</option>
							<option value='<?php echo $search_keyword = '0'; ?>'>0/5</option>
							<option value='<?php echo $search_keyword = '1'; ?>'>1/5</option>
							<option value='<?php echo $search_keyword = '2'; ?>'>2/5</option>
							<option value='<?php echo $search_keyword = '3'; ?>'>3/5</option>
							<option value='<?php echo $search_keyword = '4'; ?>'>4/5</option>
							<option value='<?php echo $search_keyword = '5'; ?>'>5/5</option>
						</select>
						<span class='fa fa-star checked'></span>
				</div>
						
			<!-- Submit to search -->
				<p><input type="submit" id="search" name="searchResult" value="Search"></p>
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
