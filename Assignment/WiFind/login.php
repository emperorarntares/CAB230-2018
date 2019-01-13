<!-- Login funciton -->
<?php
	session_start();
	require_once("class.user.php");
	$login = new USER();

	if($login->is_loggedin()!="")
	{
		$login->redirect('index.php');
	}

	if(isset($_POST['user_login']))
	{
		$uname = strip_tags($_POST['email']);
		$umail = strip_tags($_POST['email']);
		$upass = strip_tags($_POST['password']);
			
		if($login->doLogin($uname,$umail,$upass))
		{
			$login->redirect('index.php');
		}
		else
		{
			$error = "*Invalid Username/Email or Password.";
		}	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login - WiFind</title>
	<?php include 'includes/head.php';?>
	<?php include 'includes/metaData_iOS.php'; ?>
	<?php include 'includes/metaData_android.php'; ?>
</head>
<body>

<!-- Container to hold the page together to avoid overlapping -->
<div id="main-container">
	<!-- Header/Nav -->
	<?php 
	include 'includes/header.php';
	?>
	
	<div id="login-wrapper">
		<h2>Login to your Account</h2>
		<form method="post" name="form" onsubmit="return validateFormLogin()">	
			<label>Username/Email</label>
			<input id="username" type="text" name="email" onkeyup='checkLogin();'>
			<label id="error-name"></label>
			</br>
								
			<label>Password</label>
			<input id="password" type="password" name="password" onkeyup='checkLogin();'>
			<label id="error-password"></label>
			<?php
				if(isset($error))
				{
					?>
					<label id ="error"><?php echo $error; ?></label>
					<?php
				}
			?>
			<input id="register" type='submit'  name="user_login" value="Login"/>
					
			<p>Not a member? <a href="register.php">Sign up</a></p>
		</form>
	</div>
	
	<!-- Footer -->
	<?php 
	include 'includes/footer.php';
	?>
</div>
</body>
</html>