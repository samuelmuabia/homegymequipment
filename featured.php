<?php
$page='featured';
session_start();
include "navbar.php";
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_GET['detail'])){
        echo $_GET['detail'];
        }?>
    <section class="container">
        <div class="featured">
          <?php  
          if (isset($_GET['product'])){?>
            <div class="product-sec">
                <div class="product-info">
                    <?php
                        $product_code = $_GET['product'];
                        $sql = "SELECT * FROM products WHERE `code` ='$product_code' ";
                        $res = mysqli_query($conn,  $sql);

                        if (mysqli_num_rows($res) > 0) {
                            while ($products = mysqli_fetch_assoc($res)) { $name =$products['name']  ?>
                        <div class="product-image">
                            <img src="uploads/<?php echo $products['image_path']?> " alt="">
                        </div>
                        <div class="product-details">
                            <h2 class="product-name"><?php echo $products['name']?></h2>
                            <p><?php echo $products['description']?></p>
                            <h3>$<?php echo $products['price']?></h3>
                            <span><strong>Rating : </strong>5</span>
                            <form method='post' action='add_to_cart.php'>
                                <input type='hidden' name='location' value='featured' />
                                <input type='hidden' name='code' value='<?php echo $products['code'] ?>' />
                                <button class= 'light-btn' name='buy'>Buy Now</button>
                                <button class='dark-btn' type='submit' name='cart' >Add to Cart</button>
                            </form>
                        </div>            
                    <?php } } ?>
                </div>
            <div class="reviews">
                <div class="r-top">
                <h2 class="title">Review</h2>
                <Button class="light-btn">
                <a href="review.php?product=<?php echo $product_code?>&name=<?php echo $name?>">Write A review</a></Button>
                </div>
                <?php 
                $sql = "SELECT * FROM reviews WHERE `product_code` ='$product_code'";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($reviews = mysqli_fetch_assoc($res)) {  ?>
                        <div class="review">      
                            <div class="review-details">
                                <h3 ><?php echo $reviews['review_text']?></h3>
                                <p><strong>Rating : </strong><?php echo $reviews['review_rating']?></p>
                                <p>Review From : <strong><small><?php echo $reviews['review_by']?></small></strong><p>

                            </div>
                        </div>
                      
                        <?php }?>
                          </div> 
                    </div> <?php  }
                         
                        else{ ?>
                            <div><h3>No Reviews yet</h3></div> 
                            </div>
                        </div>
                            <?php } 
                }?>
            <?php  if(!isset($_GET['product']))
             {?>
                <div class="product-sec">
                       
                            <?php
                                $sql = "SELECT * FROM products where NOT `wearable`='' AND not `used`=1";
                                $res = mysqli_query($conn,  $sql);
                
                                if (mysqli_num_rows($res) > 0) {
                                    while ($products = mysqli_fetch_assoc($res)) { $name =$products['name']; $code = $products['code'];  
                                ?>
                                <div class="product-info">
                                <div class="product-image">
                                    <img src="uploads/<?php echo $products['image_path']?> " alt="">
                                </div>
                                <div class="product-details">
                                    <h2 class="product-name"><?php echo $products['name']?></h2>
                                    <p><?php echo $products['description']?></p>
                                    <h3>$<?php echo $products['price']?></h3>
                                    <p><strong>Rating : </strong>5</p>
                                    <form method='post' action='add_to_cart.php'>
                                    <input type='hidden' name='location' value='featured' />
                                    <input type='hidden' name='code' value='<?php echo $products['code'] ?>' />
                                    <button class= 'light-btn' name='buy'>Buy Now</button>
                                    <button class='dark-btn' type='submit' name='cart' >Add to Cart</button>
                                </form>
                                </div>
                        </div>
                        <div class="reviews">
                                        <div class="r-top">
                                            <h2 class="title">Review</h2>
                                            <Button class="light-btn">
                                            <a href="review.php?product=<?php echo $code?>&name=<?php echo $name?>">Write A review</a></Button>
                                        </div>
                                        <?php 
                                        $sql1 = "SELECT * FROM reviews WHERE `product_code` ='$code'";
                                        $rev = mysqli_query($conn,  $sql1);
                                        if (mysqli_num_rows($rev) > 0) {
                                            while ($reviews = mysqli_fetch_assoc($rev)) {  ?>
                                                <div class="review">      
                                                    <div class="review-details">
                                                        <h3 ><?php echo $reviews['review_text']?></h3>
                                                        <p><strong>Rating : </strong><?php echo $reviews['review_rating']?></p>
                                                        <p><strong><small><?php echo $reviews['review_by']?></small></strong><p>
                                                    </div>
                                                </div>
                                        
                                                <?php } ?> 
                                            </div>
                                                <?php } 
                                                else{ ?>
                                                    <div><h3>No Reviews yet</h3></div>
                                                </div> 
                                                
                                                    <?php } }  ?></div>
                            
                                        <?php  } 
                    } ?>

                
                <div class="wearable-products">
                <div class="featured-products">
                <h2 class="title"> Featured Products</h2>
                <?php
                    $categories = array(); 
                    $sql = "SELECT * FROM categories ";
                    $res = mysqli_query($conn,  $sql);
                    if (mysqli_num_rows($res) > 0) {
                            while ($reviews = mysqli_fetch_array($res)) {
                                $categories[]=$reviews['name'];
                            }}
                            foreach($categories as $name){
                                            
                          $sql = "SELECT * FROM products where wearable='$name' ";
                                $products = mysqli_query($conn,  $sql);
                                if (mysqli_num_rows($products) > 0) {?>
                                    <h4><?php echo $name?></h4>
                                <?php    while ($product = mysqli_fetch_assoc($products)) {?>
                                <div class="f-product">
                                        <div class="f-product-img">
                                            <img src="uploads/<?php echo $product['image_path']?>" alt="">
                                        </div>
                                        <div class="f-product-details">
                                            <h4 class="f-product-title"><a href="featured.php?product=<?php echo $product['code']?>"><?php echo $product['name']?></a></h4>
                                            <p>$<?php echo $product['price']?></p>
                                        </div>
                                        <div >
                                        <form method='post' action='add_to_cart.php'>
                                            <input type='hidden' name='location' value='featured' />
                                            <input type='hidden' name='code' value='<?php echo $product['code'] ?>' />
                                            <button class= 'light-btn' name='buy'>Buy Now</button>
                                        </form>
                                        </div>             
                                    </div>
                                  <?php } } } ?>
                </div>
                <div class="top-products">
                    <h2 class="title"> Top Products</h2>
                <?php
                                            
                     $sql = "SELECT * FROM products where `top`=1 Order by id DESC LIMIT 3 ";
                                $products = mysqli_query($conn,  $sql);
                                if (mysqli_num_rows($products) > 0) {?>
                                <?php  $count=0;  while ($product = mysqli_fetch_assoc($products)) { $count=$count+1?>
                                <div class="f-product">
                                        <div class="f-product-img">
                                            <img src="uploads/<?php echo $product['image_path']?>" alt="">
                                        </div>
                                        <h6><?php if ($count==1){ echo "Hge's Choice";}
                                        else{
                                            echo "Best Seller";
                                        }?></h6>
                                        <div class="f-product-details">
                                            <h4 class="f-product-title"><a href="featured.php?product=<?php echo $product['code']?>"><?php echo $product['name']?></a></h4>
                                            <p>$<?php echo $product['price']?></p>
                                        </div>
                                        <form method='post' action='add_to_cart.php'>
                                            <input type='hidden' name='location' value='featured' />
                                            <input type='hidden' name='code' value='<?php echo $product['code'] ?>' />
                                            <button class= 'light-btn' name='buy'>Buy Now</button>
                                        </form>           
                                    </div>
                                  <?php } }  ?>
                    </div>

            </div>
        </div>
    </section>
    <section>
        <?php
            include 'footer.php';
        ?>
    </section>
</body>
</html>