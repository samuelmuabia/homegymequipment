<?php
include 'config.php';
session_start();
$a_page='Blog Upload';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
else{
    if ($_SESSION['type'] != 'admin'){
        header("Location: index.php");
    }
}
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
<?php 
include 'navbar.php';

if (isset($_GET['detail'])){
    $alert = $_GET['detail'];?>
    <div class="alert alert-success" role="alert"><?php echo $alert ;?></div>
<?php } ?>
    <section class="container">
        <h2 class="sec-title">Blog</h2>
    <form class="blog-form" action="blog_uploads.php" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
						<label class="label" for="title">Blog Title</label><br>
						<input type="text" class="form-control" name="title" id="title" placeholder="Title">
				    </div>
                    <div class="form-group">
                        <label class="label" for="#">Blog Details</label><br>
                        <textarea name="details" class="form-control" cols="22" rows="5" placeholder="Details"></textarea>
				    </div>
                    <div class="form-group">
						<label class="label" for="name">Author</label> <br>
						<input type="text" class="form-control" name="name" id="name" placeholder="name">
				    </div>
                
                <div class="form-group">
						<label class="label" for="year">Publish Time</label> <br>
						<input type="text" class="form-control" name='publish' placeholder="Day Month,Year">
				</div>
                <div class="form-group">
                <label for="my_image">Images</label><br>
                <input type="file" name="my_image">
                </div>
                <div class="form-group" >
					<input type="submit" name="submit" value="Add Blog" class="btn-send">
				</div>

            </form>
    </section>
</body>
</html>