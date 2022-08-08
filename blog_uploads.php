<?php

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "config.php";
	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
    $title =$_POST['title'];
    $details = $_POST['details'];
    $author = $_POST['name'];
    $publish = $_POST['publish'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	if ($error === 0) {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","webp","jfif"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				// Insert into Database
				$sql = "INSERT INTO blog (title,details,author,publish,image_path) 
                VALUES('$title','$details','$author','$publish','$new_img_name')";
                mysqli_query($conn, $sql);
				$msg = "Blog has been uploaded successfully";
				header("Location: blog_upload.php?detail=$msg");
			}
		}
	}
	else {
	header("Location:blog_upload.php");
}
?>