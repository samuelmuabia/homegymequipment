<?php
$page='gallery';
session_start();
include "navbar.php";
include('config.php');
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
        <div class="gallery">
            <div class="gallery-products">
                <div class="new-products">
                    <h2 class="category-title">Products</h2>
                    <div class="grid-sec">
                    <?php
                    $result = mysqli_query($conn,"SELECT * FROM `products` where NOT `used`=1 And  `wearable`='' AND `sale`=1 ");
                    while($row = mysqli_fetch_assoc($result)){
                       $des = implode(' ', array_slice(explode(' ', $row['description']), 0, 20)) . "...";
		                echo "
                        <form method='post' action='add_to_cart.php'>
                        <input type='hidden' name='location' value='gallery' />
                        <input type='hidden' name='code' value=".$row['code']." />
                        <div class='product'>
                                <div class='product-img'>
                                    <img src=uploads/".$row['image_path']." alt=''>
                                    <p>Top</p>
                                </div>
                        <div class='product-details'>
                            <h5 class='product-title'>
                            <a href='featured.php?product=".$row['code']."'>".$row['name']."</a>
                            <span class='sale'>For Sale</span></h5>
                            <p classs='product-details'>".$des."</p>
                            <h3>$ ".$row['price']."</h3>
                        </div>
                        <div >
                            <button class= 'light-btn' name='buy'>Buy Now</button>
                            <button class='dark-btn' type='submit' name='cart' >Add to Cart</button>
                        </div>
                        </div>
                        </form>
                    ";}
                    ?>
                     </div>
                </div>  
            </div>
            <div class="others-items">
                <div class="rss-feed">
                    <?php
                    $rss = simplexml_load_file('https://www.muscleandfitness.com/feed/');
                    echo '<h2>'. $rss->channel->title . '</h2>';	
                    foreach ($rss->channel->item as $item) 
                    {
                    echo '<p class="rss-title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
                    echo "<p class='rss-desc'>" . $item->description . "</p>";
                    } 
                    ?>
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