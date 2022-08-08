<?php
session_start();
$page='contact';
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="contact">
<?php    
if (isset($_GET['detail'])){
    $alert = $_GET['detail'];?>
    <div class="alert alert-success" role="alert"><?php echo $alert ;?></div>
<?php } ?>
    <section class="container">
        <h2 class="sec-title">Contact Us</h2>

        <div class="contact-form">
            <form action="contact_us.php" method="post">
                <div class="form-groups">
                    <div class="form-group">
						<label class="label" for="name">Full Name</label><br>
						<input type="text" class="form-control" name="name" id="name" placeholder="Name">
				    </div>
                    <div class="form-group">
						<label class="label" for="email">Email</label> <br>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email">
				    </div>
                </div>
                <div class="form-group">
						<label class="label" for="subject">Subject</label> <br>
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
				</div>
                <div class="form-group">
					<label class="label" for="#">Message</label><br>
					<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
				</div>
                <div class="form-group ">
                <input type="checkbox" name = "policy" value="1" checked required>
                    <label class="label query" for="#">I agree to <a href="privacy_policy.php" target="_blanks">privacy policy</a> </label>
					
				</div>
                <div class="form-group">
					<input type="submit" name = "submit" value="Send Message" class="btn-send">
				</div>
             
            </form>
       
            <div class="map">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4907671.183419682!2d-7.06982099485425!3d53.08641908559321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487666bb7887f155%3A0xd2592b17a6bb45ae!2sGymEquipment.co.uk%20Showroom!5e0!3m2!1sen!2sbd!4v1649587952450!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
        <div class="contact-details">
            <div class="contact-detail">
                <img src="images/location.png" alt="">
                <p>Address: <small class="details">9 Gregories Rd, Beaconsfield HP9 1HQ, United Kingdom</small></p>
            </div>
            <div class="contact-detail">
                <img src="images/telephone.png" alt="">
                <p>Phone: <small class="details">+ 12345 6789</small></p>
            </div>
            <div class="contact-detail">
                <img src="images/paper-plane.png" alt="">
                <p>Email: <small class="details">info@homegym.com</small></p>
            </div>
            <div class="contact-detail">
                <img src="images/globe.png" alt="">
                <p>Website: <small class="details">www.homegymequipment.com</small></p>
            </div>
        </div>
    </section>

    </div>
    <section>
        <?php
            include 'footer.php';
        ?>
    </section>
</body>
</html>
