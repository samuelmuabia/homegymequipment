<?php
include 'config.php';
$id=$_GET['id'];
$sql="DELETE FROM products WHERE id=$id";
$read=mysqli_query($conn,$sql);
header("Location: products_view.php");
 ?>
