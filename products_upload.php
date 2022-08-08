<?php
include 'config.php';
$a_page='Products Upload';
session_start();
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
    <link rel="stylesheet" href="css/style.css">
    <title>Products</title>
</head>
<body>
<?php 
include 'navbar.php';
if (isset($_GET['detail'])){
    $alert = $_GET['detail'];?>
    <div class="alert alert-success" role="alert"><?php echo $alert ;?></div>
<?php } ?>
<?php if (isset($_GET['error'])){
    $alert = $_GET['error'];?>
    <div class="alert alert-danger" role="alert"><?php echo $alert ;?></div>
<?php } ?>
    <section class="p-form">
        <div>
        <h1 class="sec-title"><strong>Create</strong> New Category</h1>
        
        <form action="category.php" method="post" >
            <div class="p-form-group">
                <label for="title">Categry Name <span>Type category name here</span></label>
                <input type="text" name="name" id="name" class="form-controll"/>
            </div>
                <div class="p-form-group">
                    <p>
                    <span><label for="wearable">Wearable</label></span>
                       <span><input type="checkbox" name="wearable" id="wearable" value="1"></span> 
                    </p>
                </div>
            
            <div class="p-form-group">
            <button  class="dark-btn" type="submit" 
                    name="submit"
                    value="Upload">Create</button>
            </div>
            </form>
        </div>
        <div>
        <h1 class="sec-title"><strong>Add</strong> New Products</h1>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="p-form-group">
                <label for="title">Name <span>Type product name here</span></label>
                <input type="text" name="name" id="name" class="form-controll"/>
            </div>
            <div class="p-form-group">
                <label for=desc>Description <span>Type Product details here</span></label>
                <input type="text" name="desc" id="desc" class="form-controll"/>
            </div>
            <div class="p-form-group">
                <label for="price">Price <span>Type Product price here</span></label>
                <input type="text" name="price" id="price" class="form-controll"/>
            </div>
            <div class="p-form-group">
                <label for="caption">Type <span>select type of Product here</span></label>
                <div class="form-check">
                    <p>
                        <input type="checkbox" name="sale" id="sale" value="1">
                        <label for="Featured">For Sale</label>
                    </p>
                    <p>
                        <input type="checkbox" name="top" id="Top" value="1">
                        <label for="Top">Top</label>
                    </p>
                    <p>
                        <input type="checkbox" name="latest" id="latest" value="1">
                        <label for="latest">Latest</label>
                    </p>
                    <p>
                        <input type="checkbox" name="used" id="used" value="1">
                        <label for="used">Used</label>
                    </p> 
                </div>
                <div class="p-form-group">
                    <p>
                <?php 
                $sql = "SELECT * FROM categories where `wearable`=1";
                $res = mysqli_query($conn,  $sql);?>
                <select id="category" name="wearable" placeholder="select categories">
                <option value=""></option>
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
                    <label for="my_image">Images <span>Image should be less than 1MB</span></label>
                    <input type="file" 
                    name="my_image">
            </div>
            
            <div class="p-form-group">
            <button  class="light-btn" type="submit" 
                    name="submit"
                    value="Upload">Upload</button>
            </div>
            </form>
        </div>
    </section>
</body>
</html>