<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "hge";

$conn = mysqli_connect($server, $user, $pass, $database);


if (!$conn) {
    echo "<script>alert('Connection Failed.')</script>";
}

?>