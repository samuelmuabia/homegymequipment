<?php
session_start(); 
include('config.php');
$status="";
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
else if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$location = $_POST['location'];
$result = mysqli_query($conn,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image_path'];
$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
    $array_keys = $_SESSION["shopping_cart"];
    $status = "<div class='alert alert-success' role='alert'>Product is added to the cart</div>";
    if (isset($_POST['cart']))
    {
    header("Location: $location.php?detail=$status");
    }
    else{
    header("Location: cart.php");

    }
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
        $status = "<div class='alert alert-danger' role='alert'>Product is already added to your cart</div>";
        if (isset($_POST['cart']))
        {
        header("Location: $location.php?detail=$status");
        }
        else{
        header("Location: cart.php");
        }
   
	} else {
        $array_keys = array_keys($_SESSION["shopping_cart"]);
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
    $status = "<div class='alert alert-success' role='alert'>Product is added to the cart</div>";
    if (isset($_POST['cart']))
    {
    header("Location: $location.php?detail=$status");
    }
    else{
    header("Location: cart.php");
    }
	}

	}
}
?>