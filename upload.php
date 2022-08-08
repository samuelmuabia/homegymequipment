<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
else{
    if ($_SESSION['type'] != 'admin'){
        header("Location: index.php");
    }
}
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "config.php";
    $name = $_POST['name'];
    $desc = $_POST['desc'];
	$wearable = $_POST['wearable'];
	isset($_POST['sale']) ? $sale=$_POST['sale']: $sale= 0 ;
	isset($_POST['top']) ? $top=$_POST['top']: $top= 0 ;
	isset($_POST['latest']) ? $latest=$_POST['latest']: $latest= 0 ;
	isset($_POST['used']) ? $used=$_POST['used']: $used= 0 ;
    $price = floatval($_POST['price']);
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
				$char_list = " ";
				
				$code = str_replace(' ', '', $name)."01";
						
							// Insert into Database
							$sql = "INSERT INTO products(name,description,price,sale,top,latest,used,wearable,image_path,code) 
									VALUES('$name','$desc','$price','$sale','$top','$latest','$used','$wearable','$new_img_name','$code')";
							mysqli_query($conn, $sql);
							$msg = "products has been uploaded successfully";
							header("Location: products_upload.php?deatail=$msg");
					}
					else {
						$em = "You can't upload files of this type";
						header("Location: products_upload.php?error=$em");
					}
				}
				else {
					$em = "unknown error occurred!";
					header("Location: products_upload.php?error=$em");
				}

}else {
	header("Location:products_upload.php");
}