<?php 
	require "1-captcha.php";
include 'config.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$msg = '';
$email ="";
$pass = "";
$total_count;
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {

if (!$PHPCAP->verify($_POST["captcha"])) {
	$msg = "CAPTCHA does not match!";
  }
if ($msg == ""){
	if (!isset($_COOKIE["attempts"])){
		$total_count =0; 
	}
	if(isset($_COOKIE["attempts"])){
		$total_count = (int)$_COOKIE['attempts'];
	}
	if($total_count==3){
			
		$msg="To many failed login attempts. Please login after 10 minutes";
	}
	
	else{
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$password = md5($pass);
		$sql = "SELECT * FROM user_info WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['type'] = $row['type'];
			setcookie("attempts","",time()-1);	
			header("Location: index.php");
		} else {

			$total_count = $total_count+1;
			$rem_attm=3-$total_count;
			setcookie("attempts",$total_count,time()+600);	//setting the cookies value
			if($rem_attm==0){
				$email = "";
				$pass ="";
				$msg="To many failed login attempts. Please login after 30 seconds";
			}else{
				$msg="Please enter valid login details.<br/>$rem_attm attempts remaining";
			}
		}
	}
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">

	<title>Login Form</title>
</head>
<body>
	<section class="lr-section">
		<div class="lr-container">
			<form action="" method="POST" class="login-email">
				<p class="login-text" >Login</p>
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" value="<?php echo $pass; ?>" required>
				</div>
				
					<div class="input-group">
						<label for="captcha" class="captcha"><h4>Are you human?</h4></label>
							<?php
								$PHPCAP->prime();
								$PHPCAP->draw();
							?>
						<input name="captcha" type="text" required/>
					</div>	
				<div class="input-group">
					<button name="submit" class="btn">Login</button>
				</div>
				<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
				<div class="error">
					<?php 
					echo $msg;
					?>
				</div>
			</form>
		</div>
	</section>
</body>
</html>