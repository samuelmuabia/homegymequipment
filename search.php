<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
        };
?>
<div>
	<?php
		require 'config.php';
		$query = mysqli_query($conn, "SELECT * FROM `products` WHERE `name` LIKE '%$keyword%' AND `used`= 1 and `sale`=1 ORDER BY `name`") or die(mysqli_error());
    ?>
    <h2><?php echo mysqli_num_rows($query).' results found' ?></h2>
	<hr/>
    <div class="grid-sec">
    <?php
		while($fetch = mysqli_fetch_array($query)){
	?>
    <div class="product">
        <div class="product-img">
            <img src="<?php echo 'uploads/'.$fetch['image_path'] ?>" alt="">
            <p>Used</p>
        </div>
        <div class="product-details">
            <h5 class="product-title"><?php echo $fetch['name'] ?><span class='sale'>For Sale</span></h5>
            <p classs="product-desc"><?php echo $fetch['description'] ?></p>
            <form method='post' action='add_to_cart.php'>
                <input type='hidden' name='location' value='wanted' />
                <input type='hidden' name='code' value='<?php echo $fetch['code'] ?>' />
                <button class= 'light-btn' name='buy'>Buy Now</button>
                <button class='dark-btn' type='submit' name='cart' >Add to Cart</button>
        </form>
        </div>
    </div>
	<?php
		}
	?>
    </div>
</div>
<?php
	} else{
        require 'config.php';
		$query = mysqli_query($conn, "SELECT * FROM `products` where `used` = 1 and `sale`=1 ") or die(mysqli_error());
    ?>
    <div class="grid-sec">
    <?php
		while($fetch = mysqli_fetch_array($query)){
	?>
    <div class="product">
        <div class="product-img">
            <img src="<?php echo 'uploads/'.$fetch['image_path'] ?>" alt="">
            <p>Used</p>
        </div>
        <div class="product-details">
            <h5 class="product-title"><?php echo $fetch['name'] ?><span class='sale'>For Sale</span></h5>
            <p classs="product-desc"><?php echo $fetch['description'] ?></p>
            <h3>$<?php echo $fetch['price']?></h3>
            <form method='post' action='add_to_cart.php'>
                <input type='hidden' name='location' value='wanted' />
                <input type='hidden' name='code' value='<?php echo $fetch['code'] ?>' />
                <button class= 'light-btn' name='buy'>Buy Now</button>
                <button class='dark-btn' type='submit' name='cart' >Add to Cart</button>
        </form>
        </div>
    </div>
<?php
    } }
?>