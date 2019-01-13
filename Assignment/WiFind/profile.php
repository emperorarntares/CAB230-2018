<!-- Profile Page -->
<?php
	require_once("session.php");
	require_once("class.user.php");
	$auth_user = new USER();
	$userID = $_SESSION['user_session'];
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE userID=:userID");
	$stmt->execute(array(":userID"=>$userID));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html>

<head>
	<title>WiFind Profile - <?php print($userRow['username']); ?></title>
	<?php include 'includes/head.php';?>
	<?php include 'includes/metaData_iOS.php'; ?>
	<?php include 'includes/metaData_android.php'; ?>
</head>

<body onload = "myGender()">

<!-- Container to hold the page together to avoid overlapping -->
<div id="main-container">
	<!-- Header/Nav -->
	<?php 
	include 'includes/nav.php';
	?>
	
	<div class="card">
	<?php
	  echo "<img src='./images/". $userRow["profileImage"]. "' alt=\"profile picture\" style=\"width:100%\">"
	?>
	  
	  <h1>Welcome <?php print($userRow['username']); ?></h1>
	  <p class="title">WiFind user</p>
	  <p>Email Address: <?php print($userRow['email']); ?></p>
	  <p id="genderID">Gender: <?php print($userRow['gender']); ?></p>
	  
	  </br>
	  <a href="logout.php?logout=true" class="userLogout">Logout</a>
	  
	</div>
        
	<!-- Footer -->
	<?php 
	include 'includes/footer.php';
	?>
</div>

</body>
</html>