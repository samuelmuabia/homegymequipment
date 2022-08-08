<?php
    $page='home';
    session_start();
    include "navbar.php";
    include "config.php";
    $sql = "SELECT COUNT(*) FROM products";
    $res=  mysqli_query($conn, $sql);
    $products= mysqli_fetch_array($res)[0];
    $sql = "SELECT COUNT(*) FROM orders";
    $res=  mysqli_query($conn, $sql);
    $orders= mysqli_fetch_array($res)[0];
    $sql = "SELECT COUNT(*) FROM reviews";
    $res=  mysqli_query($conn, $sql);
    $reviews= mysqli_fetch_array($res)[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="cookie">
            <img src="images/cookie.png" alt="">
            <div class="cookie-content">
                <h6>Cookies Consent</h6>
                <p>This website use cookies to ensure you get the best experience on our website.</p>
                <div class="buttons">
                    <button class="item">I understand</button>
                    <a href="privacy_policy.php" target="_blank" class="item">Privacy Policy</a>
                </div>
            </div>
        </div>
       
        <section class="header">
            <div class="header-part">
                <video class="header-video" src="videos/video-2.mp4" autoplay loop muted></video>
                    <div class="header-details">
                        <h1 class="header-title" >Home Gym Equipment</h1>
                        <small>Get fit at your Home Gym</small> 
                        <p>We Help Get Fitness Facilities Built Right</p>
                        <div class="button">
                            <a href="gallery.php">Visit The Store</a>
                        </div>
                    </div>
            </div>
        </section>
    <section class="middle-part container">
        <h3 class="sec-title">What do we have</h3>
        <div class="grid-sec">
            <div class="service">
                <div class="service-img">
                    <img src="images/gym.gif" alt="">
                </div>
                <div class="service-info">
                    <div class="service-name">
                        <h5>Sell New <br>Products</h5>
                    </div>
                    <div class="service-details">
                    <p>HGE own home gym equipment ready to sell through online payment system. The equipment are presented in Gallery section.</p>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service-img">
                    <img src="images/repair.gif" alt="">
                </div>
                <div class="service-info">
                    <div class="service-name">
                        <h5>Repair <br>Equipments</h5>
                    </div>
                    <div class="service-details">
                    <p>HGE provides service 24/7. Customers can call us at any hour for servicing purpose. Customers always get our instant response</p>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service-img">
                    <img src="images/sale.gif" alt="">
                </div>
                <div class="service-info">
                    <div class="service-name">
                        <h5>Sell Used <br>Products</h5>
                    </div>
                    <div class="service-details">
                    <p>People can sell their used products via HGE. The used products are tested before putting on for sale. This products are available in Wanted section.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section >
        <h3 class="sec-title">Our Products</h3>
        <div class="slider-part">
        <div class="slider-container">
                <div class="image-container">
                    <img  class="con active" src="images/slide-1.jpeg" id="content1">
                    <img  class="con" src="images/slide-2.jpeg" id="content2">
                    <img  class="con" src="images/slide-3.jpeg" id="content3">
                    <img  class="con" src="images/slide-4.jpg" id="content4">
                    
                </div>
                <div class="dot-container">
                    <button onclick = "dot(1)"></button>
                    <button onclick = "dot(2)"></button>
                    <button onclick = "dot(3)"></button>
                    <button onclick = "dot(4)"></button>
                </div>
                <button id="prev" onclick="prev()"> &lt; </button>
                <button id="next" onclick="next()"> &gt; </button>
            </div>
        </div>


    </section>
    <section class="middle-part ">
        <div class="counter-up">
            <div class="content container">
                <div class="box">
                    <div class="icon"><img src="images/visitors-board-3190131-2658433-removebg-preview.png" alt=""></div>
                    <?php
                    include 'counter.php';
                    ?>
                    <div class="counter" value="<?php echo $counter ?>">0</div>
                    <div class="text">Number of visitor</div>
                </div>
                <div class="box">
                    <div class="icon"><img src="images/dumbbell-170-456137-removebg-preview.png" alt=""></div>
                    <div class="counter" value="<?php echo $products ?>">0</div>
                    <div class="text">Total Products</div>
                </div>
                <div class="box">
                    <div class="icon"><img src="images/orders-9-377656-removebg-preview.png" alt=""></div>
                    <div class="counter" value="<?php echo $orders ?>">0</div>
                    <div class="text">Total Orders</div>
                </div>
                <div class="box">
                    <div class="icon"><img src="images/reviews-2251889-1877728-removebg-preview.png" alt=""></div>
                    <div class="counter" value="<?php echo $reviews ?>">0</div>
                    <div class="text">Total Reviews</div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <?php 
        if (!isset($_SESSION['username']) ) {
            include 'login.php';
        }
       
        ?>
    </section>
    <section class="video-container container">
       <div class="video-details">
            <h1 class="title">Book a session</h1>
            <P class="desc">Fill-up the form to book one-to-one consultation where you will be showed how to use and take care of gym equipment</P>
            <a class="s-btn" href="information.php">Book Here</a>
        </div>
        <div class="video">
            <video src="videos/Untitled.mp4" autoplay muted></video>
        </div>
    </section>
    <?php include 'footer.php';?>
    <script src="js/script.js"></script>
</body>
</html>