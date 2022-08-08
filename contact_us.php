<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
else if(isset($_POST['submit'])){
    $name = $_SESSION['name'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `contact_us` (name,email,`subject`,`message`) 
            VALUES('$name','$email','$sub','$message')";
    mysqli_query($conn, $sql);
    $alert = "We have received your query, Thank you for contacting us! We will contact you soon.";
    header("Location: contact.php?detail=$alert");
}

?>