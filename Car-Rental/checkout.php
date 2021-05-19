<?php 
session_start();
$cart=$_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Hertz-UTS allows you to rent cars, automobiles, vehicles including SUV, Sedan"/>
  <meta name="author" content="Berat Appak"/>
  <title>Hertz-UTS | Checkout</title>
  <link rel="stylesheet" href="style.css">
  <!--jQuery 3.5.1 from GoogleAPI'S-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap 4.0.0 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <header>
        <h3>Hertz-UTS <span style="font-size:14px;"> | Online Car Rental Center</span></h3>
  </header>
</head>
<body>
  <div class="container">
  <?php if (empty($cart) || sizeof($cart)<=0) {?>
    <center><h4>You cart is empty</h4></center>
    <center><h4>Please go back to add items to Cart</h4></center>
    <a class="cancel" href="index.php"  style="float:right;margin-left:2%;">< Go Back</a>
  <?php }
  else {
  ?>
    <center><h4>Check Out</h4></center>
    <center><h4>Total-Cost: $<?php echo number_format($_SESSION["total"],2)?></h4></center>
    <center><h4>Please fill in your details</h4></center>
    <hr/>
  <form method="POST" action="success.php" id="checkout">
    <div class="form-group">
    <label for="fname">First Name (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control mb-2" placeholder="Your First Name" id="fname" name="fname">
    </div>
    <div class="form-group">
    <label for="lname">Last Name (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control mb-2" placeholder="Your Last Name" id="lname" name="lname">
    </div>
    <div class="form-group">
    <label for="email">Email (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control" placeholder="Your Email" id="email" name="email">
    </div>
    <div class="form-group">
    <label for="address1">Address Line 1(<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control" placeholder="Address Line 1" id="address1" name="address1">
    </div>
    <div class="form-group">
    <label for="address2">Address Line 2:</label>
    <input type="text" class="form-control" placeholder="Address Line 2" id="address2" name="address2">
    </div>
    <div class="form-group">
    <label for="postcode">City (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control mb-2" placeholder="Your City" id="city" name="city">
    </div>
    <div class="form-group">
    <label for="state">State (<span style="color:red;">*</span>):</label>
      <select class="form-control" id="state" name="state">
        <option>State</option>
        <option>New South Wales</option>
        <option>Queensland</option>
        <option>Victoria</option>
        <option>South Australia</option>
        <option>Western Australia</option>
        <option>Northern Territory</option>
        <option>Tasmani</option>
      </select>
    </div>
    <div class="form-group">
    <label for="postcode">Postcode (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control" placeholder="Your Post code" id="postcode" name="postcode">
    </div>
    <div class="form-group">
    <label for="payment">Payment Type (<span style="color:red;">*</span>):</label>
      <select class="form-control" id="payment" name="payment">
        <option>Payment Option</option>
        <option>Visa</option>
        <option>MasterCard</option>
      </select>
    </div>
    <div class="alert alert-warning" id="checkoutwarning"></div>
    <button type="submit" class="purchase" style="float:right;margin-left:2%;">Book ></button>
    <a class="cancel" href="clear.php"  style="float:right;margin-left:2%;">Cancel</a>
  </form>
  </div>
  <?php 
  }
  ?>
</body>
<script src="script.js"></script>
</html>