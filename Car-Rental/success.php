<?php 
session_start();
$cart=$_SESSION['cart'];
$total= $_SESSION['total'];
$email= $_POST["email"];
$name= $_POST["name"];
$city= $_POST["city"];
$address= $_POST["address1"];
$postcode= $_POST["postcode"];
$state= $_POST["state"];
$payment= $_POST["payment"];
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
    <section>
    <div class="catalogue">
       <?php
    if(isset($_SESSION['cart']) && count($cart)>0) { ?>
    <div class="alert alert-info" style="margin:2% auto;">
        <strong>Success: </strong>Thank you <?php echo $name; ?> for Booking our rental Cars. Your booking will be processed shortly.
    </div>
      <hr/>
        <p>You will receive a receipt of your booking confirmation sent to your email <strong>(<?php echo $email ?>)</strong> shortly.</p>
        <p>Main address Line: <strong><?php echo $address.", ".$postcode." | ".$city.", ".$state?></strong></p>
        <p>Payment Method : <strong><?php echo $payment ?></strong></p>
        <p>Total cost: <b>$<?php echo number_format($total,2) ?></b></p>
        <table>
          <tr>
            <th>Vehicle</th>
            <th>Rental Days</th>
            <th>Price/Day</th>
            <th>Vehicle-Cost</th>
            </tr>
          <?php foreach($cart as $row) { ?>
          <tr>
            <td><p><?php echo $row[1]?></p></td>
            <td><p><?php echo $row[3]?></p></td>
            <td><p>$<?php echo number_format($row[2],2)?></p></td>
            <td><p>$<?php echo number_format($row[2]*$row[3],2)?></p></td>
          </tr>
          <?php } ?>
        </table>
        <a class="purchase" style="float:right;" href="clear.php">Go HomePage ></a>
  <?php 
    }
    else {
  ?> <h3>You have not Purchased anything</h3>
    <a class="purchase" style="float:right;margin:2%;" href="clear.php">Go HomePage ></a>
  <?php } ?>
      </div>
  </section>
</body>
<script src="script.js"></script>
</html>