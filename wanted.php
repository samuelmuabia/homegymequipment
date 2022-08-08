<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Search</title>
</head>
<body>
    <?php 
    $page ="wanted";
    include 'navbar.php';
    ?>
    <section class="container">
    <div class="query">
        <h3>If you have any query about Second Hand Products, Please feel to <a href="contact.php">contact us</a> </h3>
    </div>
    <div class="wrap">
       <form action="wanted.php" method="post">
        <div class="search">
                <input type="text" class="searchTerm" name="keyword" placeholder="Search Equipment Here">
                <button type="submit" name="search" class="searchButton">
                    <img  src="images/search-outline.svg" alt="">
                </button>
            </div>
       </form>        
    </div>
    <div class="searched-items">
    <?php include 'search.php'?>
    </div>
    </section>
    <section>
        <?php
            include 'footer.php';
        ?>
    </section>
</body>
</html>