<!-- Navigation bar -->
<!-- Background colour header nav -->
<div class="header">
	<!-- Navbar centered -->
	<div class="navbar">
			
		<!-- Login session -->
		<a href="index.php" class="nav-logo"><img src="./images/logo.gif" alt="WiFind Logo" height="40" width="80"></a>
		<?php if(isset($_SESSION['user_session'])): ?>
		<a href="logout.php?logout=true" class="signup">Logout</a>
		<a href="profile.php" class="profile">My Profile</a>
		<?php else: ?>
		<a href="register.php" class="signup">Signup</a>
		<a href="login.php" class="login">Login</a>
		<?php endif; ?>
		
		<?php $search_keyword = ''; ?>
		
		<form name='frmSearch' action="results.php" method='post'>
			<div id="search-container">
				<!-- Search input -->
				<input type="text" class="searchFind" name='search[keyword]' value="<?php echo $search_keyword; ?>" placeholder="Wifi hotspots at shops, libraries, parks...">
				<!-- Dropdown list of suburbs -->
				<select class="searchSuburb" name="suburb[keyword]">
					<option value ="">Please choose a suburb</option>
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
				<!-- Search for results -->
				<input type="submit" name='searchResult' class="searchButton" value="Search" />
			</div>	
		</form>
	</div>
</div>