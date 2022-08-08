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
if (isset($_POST['submit'])) {
	include "config.php" ;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
	$wearable = $_POST['wearable'];
	isset($_POST['sale']) ? $sale=$_POST['sale']: $sale= 0 ;
	isset($_POST['top']) ? $top=$_POST['top']: $top= 0 ;
	isset($_POST['latest']) ? $latest=$_POST['latest']: $latest= 0 ;
	isset($_POST['used']) ? $used=$_POST['used']: $used= 0 ;
    $price = floatval($_POST['price']);
  
    if (isset($_FILES['my_image'])){

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
                    echo $new_img_name;
                    $code = str_replace(' ', '', $name)."01";
                            
                                // Insert into Database
                                    $sql = "UPDATE products SET name='$name',description='$desc',price ='$price',sale='$sale',
                        top='$top',wearable='$wearable',latest='$latest',image_path='$new_img_name',code='$code' WHERE id=$id";
                        mysqli_query($conn, $sql);
                                $msg = "products has been updated successfully";
                                header("Location: products_view.php?detail=$msg");
                        }
					else {
                        
						$em = "You can't upload files of this type";
						header("Location: products_view.php?error=$em");
					}
                    
				}
            }
        else{
            
            $sql = "UPDATE products SET name='$name',description='$desc',price ='$price',sale='$sale',
                    top='$top',wearable='$wearable',latest='$latest' WHERE id=$id";
                    mysqli_query($conn, $sql);
							$msg = "products has been updated successfully";
							header("Location: products_view.php?detail=$msg");
                }
}
else {
    
    $em = "unknown error occurred!";
    header("Location: products_view.php??error=$em");
}
