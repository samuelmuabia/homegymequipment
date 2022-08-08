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
include 'navbar.php';
if (isset($_GET['detail'])){
    $alert = $_GET['detail'];?>
    <div class="alert alert-success" role="alert"><?php echo $alert ;?></div>
<?php } ?>
    <section>
  <h2 class="product-title">All Products</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>For Sale</th>
            <th>Top</th>
            <th>Wearable</th>
            <th>Used</th>
            <th>Image</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM products ORDER BY id ASC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
            <tr>
                <td>
                <?php 
                        echo $images['name'];
                    ?>
                </td>
                <td>
                <?php 
                        echo $images['description'];
                ?>
                </td>
                <td>
                    <?php 
                        echo $images['price'];
                    ?>
                </td>
                <?php if( $images['sale']=="0" ): ?>
                    <td>No</td>
                    <?php else : ?>
                        <td>yes</td>
                    <?php endif; ?>
                <?php if( $images['top']=="0" ): ?>
                    <td>No</td>
                    <?php else : ?>
                        <td>yes</td>
                    <?php endif; ?>
                    <td><?php echo $images['wearable'] ?></td>
                    <?php if( $images['used']=="0" ): ?>
                    <td>No</td>
                    <?php else : ?>
                        <td>yes</td>
                    <?php endif; ?>
                    
                <td><img class=table_img src="uploads/<?=$images['image_path']?>"></td>
                <td>
                <?php
                    echo "<a class='btn' href='edit.php?id=".$images['id']."'>Edit</a></td>";
                ?>         
                </td>
                <td>
                <?php
                    echo "<a class='btn' href='delete.php?id=".$images['id']."'>Delete</a></td>";
                ?>         
                </td>       
            </tr>
          		
    <?php } }?>
      </tbody>
		</table>
  </div>
    </section>
</body>
</html>