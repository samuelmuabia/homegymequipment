<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <div class="logo"><img src="images/logo.png" alt=""></div>
      <?php if (isset($_SESSION["username"])){?>
          
          <div claas="right">
        <?php
        if(isset($_SESSION["shopping_cart"])) {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
      ?>
        <div class='cart_div'>
            <a href='cart.php'>
            <img src='images/cart-icon.png' /> Cart
            <span><?php echo $cart_count; ?></span></a>
        </div>
        
        <?php
        } ?>
        <a href="logout.php"><img src="images/logout.png" alt=""></a>
      </div>
      <?php } else{
        ?>
       
      <div class="btn-ls">
        <a class="l-btn" href="login.php">Login</a>
        <a class="s-btn" href="register.php">Sign Up</a>
      </div>
      <?php }?>
    </header>
      <nav>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <div class="ham-menu">&#9776;</div>
          <div class="cross-menu">&#9587;</div>
        </label>
        <ul>
          <li><a class="<?php  if($page=='home'){echo 'active';} ?>" href="index.php">Home</a></li>
          <li><a class="<?php  if($page=='interest'){echo 'active';} ?>" href="information.php">Information</a></li>
          <li><a class="<?php  if($page=='wanted'){echo 'active';} ?>" href="wanted.php">Wanted</a></li>
          <li><a class="<?php  if($page=='services'){echo 'active';} ?>" href="services.php">Services</a></li>
          <li><a class="<?php  if($page=='gallery'){echo 'active';} ?>" href="gallery.php" href="#">Gallery</a></li>
          <li><a class="<?php  if($page=='featured'){echo 'active';} ?>" href="featured.php" href="#">Featured</a></li>
          <li><a class="<?php  if($page=='contact'){echo 'active';} ?>" href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <?php if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){
        include 'admin_navbar.php';
      } ?>
  </body>
</html>
