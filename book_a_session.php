<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if(isset($_POST['submit'])){
    $name = $_SESSION['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $message = $_POST['message'];
    echo $message;
    $sql = "INSERT INTO `session` (name,email,`type`,details) 
            VALUES('$name','$email','$type','$message')";
    mysqli_query($conn, $sql);
    $alert = "You booked a session succesfully";
    header("Location: information.php?detail=$alert");
}
?>