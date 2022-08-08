<?php
$page='services';
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
<section class="middle-part container">
        <h3 class="sec-title">Our Services</h3>
        <div class="grid-sec">
            <div class="service">
                <div class="service-img">
                    <img src="images/s1.png" alt="">
                </div>
                <div class="service-info">
                    <div class="service-name">
                        <h5>100% Repair Success</h5>
                    </div>
                    <div class="service-details">
                    <p>HGE tries to provide the customers with the best service possible. The repairing rate of success is 100% till now.</p>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service-img">
                    <img src="images/s3.png" alt="">
                </div>
                <div class="service-info">
                    <div class="service-name">
                        <h5>Low Cost</h5>
                    </div>
                    <div class="service-details">
                    <p>HGE never overcharge their customers. We focus on providing the best service with loyalty and respect. Our customers always prefer us before any other shop.</p>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service-img">
                    <img src="images/s2.png" alt="">
                </div>
                <div class="service-info">
                    <div class="service-name">
                        <h5>24/7 Services</h5>
                    </div>
                    <div class="service-details">
                    <p>HGE provides service 24/7. Customers can buy, sell and call us at any hour for servicing purpose. WE responds to our customer as soon as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <h2 class="sec-title">Recent Works</h2>
        <div class="works">
        <?php 
          $sql = "SELECT * FROM workshop ORDER BY id ASC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($workshop = mysqli_fetch_assoc($res)) {  ?>
               <div class="work">
                <div class="work-img">
                    <img src="uploads/<?php echo $workshop['image_path']?>" alt="">
                    <p><?php echo $workshop['details']?></p>
                </div>
                <h4><?php echo $workshop['title']?></h4>
            </div>
            <?php } }else{?>
            <div>
                <h3>No Workshop found</h3>
            </div>
            <?php }?>
        </div>
    </section>
    <section>
        <?php
            include 'footer.php';
        ?>
    </section>
</body>
</html>