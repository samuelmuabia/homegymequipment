<?php 
include 'config.php';
session_start();
$msg = '';
$msgcpass="";
$msgemail="";
$msgpass="";
$email ="";
$pass = "";
$username ="";
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $pass))
	{
		$password = md5($_POST['password']);
		$cpassword = md5($_POST['cpassword']);	
		if ($password == $cpassword) {
			$sql = "SELECT * FROM user_info WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			if (!$result->num_rows > 0) {
				$sql = "INSERT INTO user_info (`username`, `email`, `password`, `reg_time`,type) VALUES ('$username', '$email', '$password', current_timestamp(),'user' )";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
					$msg = "Your account has successfully created!!";
					header("Location: login.php");
				} 
				else {
					$msg ='Woops! Something Wrong Went.';
				}
			} 
			else {
				$msgemail ='Woops! Email Already Exists.';
			}
			
		} else {
			$msgcpass = "Password Not Matched.";
		}
	}
	else{
		$msgpass = "Weak Password";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Register Form </title>
</head>
<body>
	<section class="lr-section">
	<div class="lr-container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="error">
				<?php 
				echo $msgemail;
				?>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $pass; ?>" required>
            </div>
			<div class="error">
				<?php 
				echo $msgpass;
				?>
			</div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $pass; ?>" required>
			</div>
			<div class="error">
				<?php 
				echo $msgcpass;
				?>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
			<div class="succes">
				<?php 
				echo $msg;
				?>
			</div>
		</form>
		
	</div>
	</section>
</body>
</html>