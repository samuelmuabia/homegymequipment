<?php
$page='interest';
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
<?php    
if (isset($_GET['detail'])){
    $alert = $_GET['detail'];?>
    <div class="alert alert-success" role="alert"><?php echo $alert ;?></div>
<?php } ?>

    <section class="information" >
    <div class="book-form">
        <h2 class="l-title">Book A Session</h2>
            <form action="book_a_session.php" method="post">
                <div class="form-groups">
                    <div class="form-group">
						<label class="label" for="name">Full Name</label><br>
						<input type="text" class="form-control" name="name" id="name" placeholder="Name">
				    </div>
                    <div class="form-group">
						<label class="label" for="email">Email</label> <br>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email">
				    </div>
                </div>
                <div class="form-group">
                    
                <label for="type">Book Type</label>
                    <select id="type" name="type">
                    <option value="offline">One to One Consultations(face to face)</option>
                    <option value="online">One to One Consultations(Online)</option>
                    </select>

				</div>
                <div class="form-group">
					<label class="label" for="#">Message</label><br>
					<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
				</div>
                <div class="form-group">
					<input type="submit" name="submit" value="Book Now" class="btn-send">
				</div>
            </form>
        </div>
    <section class="">
        <div class="latest">
            <div class="latest-products">
                <h2 class="l-title">Latest Products</h2>
            <div class="l-grid-sec">
            <?php 
            $sql = "SELECT * FROM products where `latest`=1 ORDER BY id DESC LIMIT 4";
            $res = mysqli_query($conn,  $sql);

            if (mysqli_num_rows($res) > 0) { $count =0;
                while ($images = mysqli_fetch_assoc($res)) {  ?>
                <div class="product">
                    <div class="product-img">
                        <img src="uploads/<?=$images['image_path']?>" alt="">
                        <p>Latest</p>
                    </div>
                    <div class="product-details">
                        <h5 class="product-title">
                        <a href="featured.php?product=<?php echo $images['code']?>"><?=$images['name']?></a>    
                        </h5>
                        <p classs="product-details"><?=$images['description']?></p>
                    </div>
                </div>
                <?php } }?>
            </div>
            </div>
            <div class="latest-info">
            <h2 class="l-title">Latest Fitness Information</h2>
        <div class="blogs">
            <?php 
            $sql = "SELECT * FROM blog ORDER BY id ASC";
            $res = mysqli_query($conn,  $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($blogs = mysqli_fetch_assoc($res)) {  ?>
                <article class="blog">
                    <div class="blog-details">
                        <h5 class="blog-title"><a href="blog.php?blog-id=<?php echo $blogs['id']?>"><?php echo $blogs['title']?></a></h5>
                        <p class="blog-desc"><?php echo implode(' ', array_slice(explode(' ', $blogs['details']), 0, 20)) . "...";  ?></p>
                        <h5 class="blog-author"><?php echo $blogs['author']?> <span class="blog-date"><?php echo $blogs['publish']?></span> </h5>
                    </div>
                    <div class="blog-img">
                        <img src="uploads/<?php echo $blogs['image_path']?>" alt="">
                    </div>
                </article>
                <?php } }else{?>
                <div>
                    <h3>No results found</h3>
                </div>
                <?php }?>
                </div>
        </div>
    </section>
    </section>
    <section>
        <?php
            include 'footer.php';
        ?>
    </section>
</body>
</html>