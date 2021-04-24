<?php 
session_start();
$cart=$_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 4.0.0 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Checkout Cart | Grocery-Store</title>
  <link rel="stylesheet" href="style.css">  
</head>
<body>
  <div class="container">
  <?php if (empty($cart) || sizeof($cart)<=0) {?>
    <center><h3>You cart is empty</h3></center>
    <center><h4>Please go back to add items to Cart</h4></center>
    <a href="index.php" id="add">Go to Home</a>
  <?php }
  else { 
  ?>
    <center><h3>Check out</h3></center>
    <center><h4>Total-Cost: $<?php echo number_format($_SESSION["total"],2)?></h4></center>
    <hr/>
  <div class="alert alert-warning" id="checkoutwarning" style="display:none;"></div>
  <form method="POST" action="success.php" onsubmit="return checkoutForm()">
    <div class="form-group">
    <label for="email">Email (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control" placeholder="Your Email" id="email" name="email">
    </div>
    <div class="form-group">
    <label for="name">Full Name (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control mb-2" placeholder="Your Full Name" id="name" name="name">
    </div>
    <div class="form-group">
    <label for="address">Address (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control" placeholder="Your Home Address" id="address" name="address">
    </div>
    <div class="form-group">
    <label for="postcode">Postcode (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control mb-2" placeholder="Your Postcode" id="postcode" name="postcode">
    </div>
    <div class="form-group">
    <label for="state">State (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control mb-2" placeholder="Your State" id="state" name="state">
    </div>
    <div class="form-group">
    <label for="country">Country (<span style="color:red;">*</span>):</label>
    <input type="text" class="form-control" placeholder="Your Country" id="country" name="country">
    </div>
    <button type="submit" id="checkout" style="float:right;">Purchase > </button>
    <a id="clear" style="float:right;" href="index.php">Cancel</a>
  </form>
  </div>
  <?php 
  }
  ?>
</body>
<script src="script.js"></script>
</html>