<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <nav>
        <input type="checkbox" id="click1">
        <label for="click1" class="menu-btn">
          <div class="ham-menu">&#9776;</div>
          <div class="cross-menu">&#9587;</div>
        </label>
        <ul>
          <li><a class="<?php  if($a_page=='Products Upload'){echo 'active';} ?>" href="products_upload.php">Upload Product</a></li>
          <li><a class="<?php  if($a_page=='Products View'){echo 'active';} ?>" href="products_view.php">Information</a></li>
          <li><a class="<?php  if($a_page=='services'){echo 'active';} ?>" href="workshops.php">Add Services</a></li>
          <li><a class="<?php  if($a_page=='Blog Upload'){echo 'active';} ?>" href="blog_upload.php">Upload Blog</a></li>
        </ul>
      </nav>
  </body>
</html>
