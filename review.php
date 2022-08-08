<?php
include 'config.php';
$product_code = $_GET['product'];
$product_name = $_GET['name'];
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <h2 class="sec-title">write-review</h2>
    <form class="review-form" action="add_review.php" method="post" >
    <input type='hidden' name='name' value="<?php echo $product_name; ?>" />
    <input type='hidden' name='code' value="<?php echo $product_code; ?>" />
                <div class="form-group">
                    <label>Product</label>
                    <div class="b-box"><?php echo $product_name?></div>
                </div>
                <div class="form-group required">
                    <label>Rating</label>
                    <div id="input-rating">
                        Bad &nbsp; <input type="radio" name="rating" value="1" /> &nbsp; <input type="radio" name="rating" value="2" /> &nbsp; <input type="radio" name="rating" value="3" /> &nbsp; <input type="radio" name="rating" value="4" /> &nbsp; <input type="radio" name="rating" value="5" checked/> Good                                            </div>
                </div>
                <!-- <div class="form-group ">
                    <label  for="#">Your Review</label>
                    <textarea name="text" id="input-text" placeholder="Your Review" class="form-input"></textarea>
                                    </div> -->
                <div class="form-group">
					<label class="label" for="#">Review</label><br>
					<textarea name="review" class="form-control" id="review" cols="50" rows="4" placeholder="Review"></textarea>
				</div>
                <button type="submit" name="submit" class="dark-btn" >
                Submit</button>
                <a class="light-btn" href="Location: featured.php?product=$<?php echo $product_code?>">Back</a>
            </form>
    </section>
</body>
</html>