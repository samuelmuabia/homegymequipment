<?php
include 'config.php';
if(isset($_GET['transaction_id']))
{
    $paymentAmount = $_GET['paymentAmount'];
    $transaction_id = $_GET['transaction_id'];
    session_start();
    $username =$_SESSION['username'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $number = $_GET['number'];
    if(isset($_SESSION["shopping_cart"]))
    {
        $quantity = 0;
        foreach ($_SESSION["shopping_cart"] as $product)
        {
            $quantity = $quantity + $product['quantity'];
        }
        $sql1 = "SELECT email from user_info where `username` ='$username'";
        $data = mysqli_query($conn, $sql1);
        $email = mysqli_fetch_array($data)[0];
        $sql2 = "INSERT INTO customer (name,email,address,number) 
        VALUES('$name','$email','$address',$number)";
        mysqli_query($conn, $sql2);
        $sql3 = "SELECT * from customer ORDER BY id DESC LIMIT 1";
        $cus = mysqli_query($conn,  $sql3);
        if (mysqli_num_rows($cus) > 0) {
            while ($customer = mysqli_fetch_assoc($cus)) {
                $cus_id = intval( $customer['id']);
                $sql = "INSERT INTO orders (total_qty, total_amount, transaction_id, customer_id) 
                VALUES('$quantity','$paymentAmount','$transaction_id','$cus_id')";
                mysqli_query($conn, $sql);
            }
        }
        
        $sql = "Select * from orders ORDER BY id DESC LIMIT 1";
        $res = mysqli_query($conn,  $sql);

        if (mysqli_num_rows($res) > 0) {
          	while ($order = mysqli_fetch_assoc($res)) 
             { 
                $order_id =$order['id'];
                foreach ($_SESSION["shopping_cart"] as $product)
                    {
                        $product_code = $product['code'];
                        $quantity = $product['quantity'];
                        $unit_price = $product['price'];
                        $gross_price = $unit_price * $quantity;
                        $name = $product['name'];
                        $sql = "INSERT INTO order_items (order_id,product_code,quantity,unit_price,gross_price,name)
                        VALUES('$order_id','$product_code','$quantity','$unit_price','$gross_price','$name')";
                        mysqli_query($conn, $sql);
                    }   
             }
        }
    }
    unset($_SESSION["shopping_cart"]);
    include 'navbar.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="payment">
        <h2>Payment Received</h2>
        <video src="images/Success Payment Animated Icons - Free Download in JSON, MP4, AEP, Lottie.mp4" autoplay loop muted></video>
    </div>
    <section class="invoice-form">
      <div class="header-part clearfix">
        <div id="logo">
          <img src="images/logo.png">
        </div>
        <div id="company">
            
          <h2 class="name">Home Gym Equipment</h2>
          <div>9 Gregories Rd, Beaconsfield HP9 1HQ, United Kingdom</div>
          <div>(602) 519-0450</div>
          <div><a href="mailto:company@example.com">info@hge.com</a></div>
        </div>
        </div>
        </div>
      <main>
        <div id="details" class="clearfix">
          <div id="client">
              <?php 
               $sql = "SELECT * from customer ORDER BY id DESC LIMIT 1";
               $cus = mysqli_query($conn,  $sql);
               if (mysqli_num_rows($cus) > 0) {
                   while ($customer = mysqli_fetch_assoc($cus)) {
                       $cus_add =  $customer['address']; 
                       $cus_name = $customer['name']; 
                       $cus_email = $customer['email']; 
                       $cus_number = $customer['number'];
                   } }
            ?>
            <div class="to">INVOICE TO:</div>
            <h2 class="name"><?php echo $cus_name ?></h2>
            <div class="address"><?php echo $cus_add ?></div>
            <div class="email"><a href="mailto:john@example.com"><?php echo $cus_email ?></a></div>
          </div>
          <div id="invoice">
         <?php $sql = "Select * from orders ORDER BY id DESC LIMIT 1";
        $res = mysqli_query($conn,  $sql);

        if (mysqli_num_rows($res) > 0) {
          	while ($order = mysqli_fetch_assoc($res)) 
             { $order_id =$order['id'];} }?>
            <h1>INVOICE <?php $order_id?></h1>
            <div class="date">Date of Invoice: <?php echo date("m.d.y") ?></div>
            <div class="date">Due Date: <?php
             $predate = date("m") +6;
            echo date($predate.".d.y") ;
            ?></div>
          </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th class="no">#</th>
              <th class="desc">DESCRIPTION</th>
              <th class="unit">UNIT PRICE</th>
              <th class="qty">QUANTITY</th>
              <th class="total">TOTAL</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $sql1 = "SELECT * from order_items where `order_id` ='$order_id'";
                $data = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($data) > 0) {
                    $count =0;
                    $subtotal = 0; 
                    while ($product = mysqli_fetch_assoc($data)) 
                   { $count = $count+1;?>
            <tr>
              <td class="no"><?php echo $count ?></td>
              <td class="desc"><h3><?php echo $product['name'] ?></h3></td>
              <td class="unit">$<?php echo $product['unit_price']?></td>
              <td class="qty"><?php echo $product['quantity'] ?></td>
              <td class="total">$<?php echo $product['gross_price'];
              $subtotal = $subtotal + $product['gross_price']; ?></td>
            </tr>
            <?php }  }?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">SUBTOTAL</td>
              <td>$<?php echo $subtotal ?></td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">VAT 5%</td>
              <td>$<?php $vat = $subtotal* 0.05;
              echo $vat?></td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">GRAND TOTAL</td>
              <td>$<?php $total = $subtotal + $vat + 40;
              echo $total?></td>
            </tr>
          </tfoot>
        </table>
        <div id="thanks">Thank you! Have a Good Day.</div>
        <div id="notices">
          <div>NOTICE:</div>
          <div class="notice">Feel free to contact us for anything and Save this Invoice.</div>
        </div>  
    </main>
      <div class="i-footer">
        Invoice was created on a computer and is valid without the signature and seal.
        </div>
    </section>
</body>
</html>