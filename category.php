<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $wearable = $_POST['wearable'];
    $sql = "INSERT INTO categories (name,wearable) 
            VALUES('$name','$wearable')";
    mysqli_query($conn, $sql);
    header("Location: products_upload.php");
}
?>
