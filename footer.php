<?php
	$year = date("Y"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li ><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="privacy_policy.php" target="_blank">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Site Map</h4>
  	 			<ul>
				   <li><a class="<?php  if($page=='home'){echo 'f-active';} ?>" href="index.php">Home</a></li>
          <li><a class="<?php  if($page=='interest'){echo 'f-active';} ?>" href="information.php">Information</a></li>
          <li><a class="<?php  if($page=='wanted'){echo 'f-active';} ?>" href="wanted.php">Wanted</a></li>
          <li><a class="<?php  if($page=='services'){echo 'f-active';} ?>" href="services.php">Services</a></li>
          <li><a class="<?php  if($page=='gallery'){echo 'f-active';} ?>" href="gallery.php" href="#">Gallery</a></li>
          <li><a class="<?php  if($page=='featured'){echo 'f-active';} ?>" href="featured.php" href="#">Featured</a></li>
          <li><a class="<?php  if($page=='contact'){echo 'f-active';} ?>" href="contact.php">Contact</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>We have</h4>
  	 			<ul>
  	 				<li><a href="wanted.php">Used Products</a></li>
  	 				<li><a href="featured.php">Top Products</a></li>
  	 				<li><a href="featured.php">Wearable Products</a></li>
  	 				<li><a href="featured.php">Featured Products</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><img src="images/icons/facebook.png" alt=""></a>
  	 				<a href="#"><img src="images/icons/instagram (2).png" alt=""></a>
  	 				<a href="#"><img src="images/icons/twitter (2).png" alt=""></a>
  	 				<a href="#"><img src="images/icons/youtube (1).png" alt=""></a>
  	 			</div>
  	 		</div>
  	 	</div>
		<h6> copyright © <?php echo $year?>  all reseved to HGE company </h6>
  	 </div>
  </footer>

</body>
</html>