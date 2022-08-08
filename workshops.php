<?php
session_start();
$a_page='services';
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
        <h2 class="sec-title">Workshop</h2>
    <form class="blog-form" action="add_workshop.php" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
						<label class="label" for="title">Work Title</label><br>
						<input type="text" class="form-control" name="title" id="title" placeholder="Title">
				    </div>
                    <div class="form-group">
						<label class="label" for="desc">Work Description</label><br>
						<input type="text" class="form-control" name="desc" id="desc" placeholder="Details">
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