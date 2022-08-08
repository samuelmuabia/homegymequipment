<?php 
 include "config.php";
 session_start();
 include "navbar.php";
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
    <section class="container v-blog"> 
    <?php
                    
                    $blog_id = $_GET['blog-id'];
                    $sql = "SELECT * FROM blog WHERE `id` ='$blog_id' ";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($blog = mysqli_fetch_assoc($res)) { ?>
                        <div class="b-title">
                            <h2><?php echo $blog['title']  ?></a></h2>
                            <img src="uploads/<?php echo $blog['image_path']?>" alt="">
                        </div>
                        <div class="b-author">
                            <h4><?php echo $blog['author']  ?> <span><?php echo $blog['publish']  ?></span></h4>
                        </div>
                        <div class="b-detail">
                            <p><?php echo $blog['details']  ?></p>
                        </div>
                    <?php } }?>
    </section>
</body>
</html>