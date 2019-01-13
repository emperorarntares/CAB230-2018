<!-- Registeration function -->
<?php
	session_start();
	require_once('class.user.php');
	$user = new USER();

	if($user->is_loggedin()!="")
	{
		$user->redirect('login.php');
	}

	/* Input validation process */
	if(isset($_POST['user_register']))
	{
		$uname = strip_tags($_POST['username']);
		$umail = strip_tags($_POST['email']);
		$upass = strip_tags($_POST['password']);	
		$ugender = strip_tags($_POST['gender']);
		
		/* Determine user's gender */
		if( isset( $_POST['gender']) && $_POST['gender'] == '0')
		{
			$uimage = "profileImage_M.png";
		}
		else
		{
			$uimage = "profileImage_F.png";
		}
		
		/* Check if username/email exists */
		try
		{
			$stmt = $user->runQuery("SELECT username, email FROM users WHERE username=:uname OR email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
					
			if($row['username']==$uname) {
				$error[] = "Username already exists!";
			}
			else if($row['email']==$umail) {
				$error[] = "Email address already exists!";
			}
			else
			{
				if($user->register($uname,$umail,$upass,$ugender,$uimage)){	
					$user->redirect('register.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}

?>
<!DOCTYPE html>

<html>

<head>
	<title>Create an Account - WiFind</title>
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
	
	<!-- Wraps body elements -->
	<div class="registration-content">
		
		<form id ='registration' name="form" action="register.php" onsubmit="return validateForm()" method="post">
			<!-- Registration form -->
			<fieldset id="form-border">
					
				<div id="heading">
					<h2>Create an Account</h2>
					<p>By registering on WiFind, you will be able to discover and connect all of Brisbane's WiFi locations!</p>
					
					<?php
					if(isset($error))
					{
						foreach($error as $error)
						{
							 ?>
							<label id="error"><?php echo $error; ?></label>
							<?php
						}
					}
					else if(isset($_GET['joined']))
					{
						?>
						<p>Successfully registered! Click <a href='login.php'>Here</a> to login.</p>
						<?php
					}
					?>
				</div>
			<!-- Field blanks for name, email etc -->
				<div id="form-group">
					
					<input type='text' name="username" id="username" placeholder = 'Username: alphanumeric only' onkeyup='check();' value="<?php if(isset($error)){echo $uname;}?>"/>
					<label id="error-name"></label>
					
					<input type='text' name="email" id="email" placeholder ='Email: example@email.com' onkeyup='check();' value="<?php if(isset($error)){echo $umail;}?>"/>
					<label id="error-email"></label>
					
					<input type='password' name="password" id="password" placeholder='Password' onkeyup='check();' />
					<label id="error-password"></label>

					<input type='password' name='confirm-password' id="confirm-password" placeholder='Confirm Password' onkeyup='check();' />
					<label id="error-confirm-password"></label>
					
					</br>
					<label id="gender-label">Gender: </label>
					<input id = "male" type='radio' name='gender' value='0' onkeyup='check();'> Male
					<input id = "female" type='radio' name='gender' value='1' onkeyup='check();'> Female
					
					</br>
					<div id = "checkbox">
					<p><input type="checkbox" name="terms" id="ticked" value="yes" onkeyup='check();'> 
					I agree to the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></p>
					</div>
				
				</div>
				<!-- Register to complete form -->
				<input id="register" type='submit'  name="user_register" value="Register"/>
				<!-- Login notice -->
				<div id="note">
					<p>To login, click <a id="click" href="login.php">here.</a></p>
				</div>
				
			</fieldset>
		</form>

		<!-- Signup image -->
		<img src="./images/signup.jpg" class="image" alt="signup image">
			
	</div>

	<!-- Footer -->
	<?php 
	include 'includes/footer.php';
	?>
</div>

</body>
</html>
