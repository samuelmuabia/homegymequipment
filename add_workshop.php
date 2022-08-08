<?php
session_start();

if (!isset($_SESSION['username']) && $_SESSION['type']!='admin') {
    header("Location: index.php");
}
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "config.php";
        $title =$_POST['title'];
		$details = $_POST['desc'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	if ($error === 0) {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","webp"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				// Insert into Database
				$sql = "INSERT INTO workshop (title,details,image_path) 
                VALUES('$title','$details','$new_img_name')";
                mysqli_query($conn, $sql);
				$msg = "Service has been uploaded successfully";
				header("Location: workshops.php?detail=$msg");
			}else {
		        echo "<script>alert('You can't upload files of this type')</script>";
			}
		}
	}
	else {
	header("Location:workshops.php");
}
?>