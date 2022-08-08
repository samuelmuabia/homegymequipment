<?php
session_start();
include "navbar.php";
include 'config.php';
$status="";
$subtotal =0;
$vat = 0;
$shipping=40;
$total =0;
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="css/style.css">
  <!--
    - google font link
  -->
  <link
    href="https://fonts.googleapis.com/css?family=Source+Sans+3:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
    rel="stylesheet" />
</head>
<body>

  <main class="cart-container">
    <h1 class="heading">
      <ion-icon name="cart-outline"></ion-icon> Shopping Cart
    </h1>
    <div class="item-flex">
      <!--
       - checkout section
      -->
      <section class="checkout">

        <h2 class="section-heading">Payment Details</h2>
        <div class="payment-form">
          <div class="payment-method">
            <button class="method selected">
              <img class="icon-cart" src="images/logo-paypal.svg" alt="">
              <span>PayPal</span>
              <img class="icon-cart" src="images/checkmark-circle-outline.svg" alt="">
            </button>
          </div>
          <form action="#">
            <div class="name">
              <label for="name" class="label-default">Name</label>
              <input type="text" name="name" id="name" class="input-default">
            </div>
            <div class="phone-number">
              <label for="phone-number" class="label-default">Phone Number</label>
              <input type="number" name="phone-number" id="phone-number" class="input-default">
            </div>
            <div class="phone-number">
              <label for="address" class="label-default">Address</label>
              <input type="text" name="address" id="address" class="input-default">
            </div>
          </form>
        </div>
        <div id="paypal-btn">
        </div>
      </section>
      <!-- cart section-->
      <section class="cart">
        <div class="cart-item-box">
          <h2 class="section-heading">Order Summary</h2>
          <div class="product-cards">
          <?php
          if(isset($_SESSION["shopping_cart"])){
            foreach ($_SESSION["shopping_cart"] as $product)
            {
            ?>
            <div class="product-card">
              <div class="img-box">
                <img src='uploads/<?php echo $product["image"]; ?>' alt="" width="80px" class="product-img">
              </div>
              <div class="detail">
                <h4 class="product-name"><?php echo $product["name"]; ?></h4>
                <div class="wrapper">
                  <div class="product-qty">
                    <form method='post' action=''>
                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                    <input type='hidden' name='action' value="change" />
                    <select name='quantity' class='quantity' onChange="this.form.submit()">
                    <option <?php if($product["quantity"]==1) echo "selected";?>
                    value="1">1</option>
                    <option <?php if($product["quantity"]==2) echo "selected";?>
                    value="2">2</option>
                    <option <?php if($product["quantity"]==3) echo "selected";?>
                    value="3">3</option>
                    <option <?php if($product["quantity"]==4) echo "selected";?>
                    value="4">4</option>
                    <option <?php if($product["quantity"]==5) echo "selected";?>
                    value="5">5</option>
                    </select>
                    </form>
                  </div>
                  <div class="price">
                    $ <span id="price"><?php echo $product["price"];?></span>
                  </div>
                </div>
              </div>
              <form method='post' action=''>
              <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
              <input type='hidden' name='action' value="remove" />
              <?php
              $subtotal = $subtotal + $product["price"]*$product['quantity'];
              ?>
              <button class="product-close-btn">
              <img class="icon-cart" src="images/close-outline.svg" alt="">
              </button>
              </form>
            </div>
            <?php } 
            
            $vat = $subtotal*0.05;
            $total = $subtotal + $vat + $shipping; 
            }else{
             $shipping = 0;
           } ?>
          </div>
        </div>
        <div class="wrapper">
          <div class="discount-token">
            <label for="discount-token" class="label-default">Gift card/Discount code</label>
            <div class="wrapper-flex">
              <input type="text" name="discount-token" id="discount-token" class="input-default">
              <button class="cart-btn btn-outline">Apply</button>
            </div>
          </div>
          <div class="amount">
            <div class="subtotal">
              <span>Subtotal</span> <span>$ <span id="subtotal"><?php echo $subtotal ?></span></span>
            </div>
            <div class="tax">
              <span>VAT</span> <span>$ <span id="vat"><?php echo $vat ?></span></span>
            </div>
            <div class="shipping">
              <span>Shipping</span> <span>$ <span id="shipping"><?php echo $shipping ?></span></span>
            </div>
            <div class="total">
              <span>Total</span> <span>$ <span id="total"><?php echo $total ?></span></span>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <script src="https://www.paypal.com/sdk/js?client-id=AYn2kooP-aaHULpZJOzXn3Az6c8vYqySTfEhEYz5xz4jhM1f8684rXgDKrpP0MP273rPa20fVWrffuwz&disable-funding=credit,card&currency=USD"></script>
  <script src="js/payment.js"></script>
  <?php echo "<script>const totalprice = document.getElementById('total');
  totalPriceText = parseInt(totalprice.innerText); 
  paypalPayment(totalPriceText);</script>"?>
</body>

</html>