<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if(isset($_POST['submit'])){
    $user = $_SESSION['username'];
    $name = $_POST['name'];
    $code = $_POST['code'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $sql = "INSERT INTO reviews (product_name,product_code,review_rating,review_text,review_by) 
            VALUES('$name','$code','$rating','$review','$user')";
    mysqli_query($conn, $sql);
    header("Location: featured.php?product=$code");
}
?>