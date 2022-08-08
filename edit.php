<?php
include 'config.php';
$a_page='Products View';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
else{
    if ($_SESSION['type'] != 'admin'){
        header("Location: index.php");
    }
}
    $id=$_GET['id'];
    include "config.php";
    $sql="SELECT * FROM products WHERE id=$id";
    $read=mysqli_query($conn,$sql);
    $details=mysqli_fetch_array($read);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Products</title>
</head>
<body>
    <section>
        <?php include 'navbar.php' ?>
    <h1 class='sec-title'><strong>Edit</strong> Products Details</h1>
    
    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?=$id?>" hidden>
        <div class="p-form-group">
            <label for="title">Name <span>Type product name here</span></label>
            <input type="text" name="name" id="name" class="form-controll" value="<?php echo $details['name']; ?>"/>
        </div>
        <div class="p-form-group">
            <label for=desc>Description <span>Type Product details here</span></label>
            <input type="text" name="desc" id="desc" class="form-controll" value="<?php echo $details['description'];?>"/>
        </div>
        <div class="p-form-group">
            <label for="price">Price <span>Type Product price here</span></label>
            <input type="text" name="price" id="price" class="form-controll" value="<?php echo $details['price'];?>"/>
        </div>
        <div class="p-form-group">
            <label for="caption">Type <span>select type of Product here</span></label>
            <div class="form-check">
                <p>
                    <input type="checkbox" name="sale" id="sale" value="1" <?php
                    if($details['sale']=="1"):?>checked<?php endif; ?>>
                    <label for="sale">For Sale</label>
                </p>
                <p>
                    <input type="checkbox" name="top" id="Top" value="1" <?php
                    if($details['top']=="1"):?>checked<?php endif; ?>>
                    <label for="Top">Top</label>
                </p>
                <p>
                    <input type="checkbox" name="latest" id="latest" value="1" <?php
                    if($details['latest']=="1"):?>checked<?php endif; ?>>
                    <label for="latest">latest</label>
                </p>
                <p>
                    <input type="checkbox" name="used" id="used" value="1" <?php
                    if($details['used']=="1"):?>checked<?php endif; ?>>
                    <label for="used">Used</label>
                </p>
            </div>
        </div>
        <div class="p-form-group">

        <div class="p-form-group">
                    <p>
                <?php 
                $sql = "SELECT * FROM categories where `wearable`=1";
                $res = mysqli_query($conn,  $sql);?>
                <select id="cars" name="wearable" placeholder="select categories">
                <option value="<?php echo $details['wearable'] ?>"><?php echo $details['wearable'] ?></option>
                <?php if (mysqli_num_rows($res) > 0) {
                    while ($cat = mysqli_fetch_assoc($res)) {
                        $name = $cat['name'];?>
                                <option value="<?php echo $name ?>"><?php echo $name ?></option>
                        <?php } }?>
                        </select>
                        <label for="warable">Wearable</label>
                        </p>
                </div>
        </div>
        <div class="p-form-group">
                <label for="">Selected Image</label>
                <img id="sel-img" src="uploads/<?php echo $details['image_path']?>" alt="" srcset="">
                <label for="my_image">Images <span>Image should be less than 1MB</span></label>
                <input type="file" 
                  name="my_image" file_exists>
        </div>
        
        <div class="p-form-group">
        <input class="light-btn" type="submit" 
                  name="submit"
                  value="Upload">
        </div>
    </form>
    </section>
</body>
</html>