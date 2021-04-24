<?php 
session_start();
$email= $_POST["email"];
$name= $_POST["name"];
$address= $_POST["address"];
$postcode= $_POST["postcode"];
$state= $_POST["state"];
$country= $_POST["country"];
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
  <title>Order Complete | Grocery-Store</title>
  <link rel="stylesheet" href="style.css">  
</head>
<body>
  <div class="container">
    <center><h3>Order Complete</h3></center>
      <div class="alert alert-info" >
          <strong>Success: </strong>Thank you <?php echo $name; ?> for ordering. Your order will shortly be processed.
      </div>
      <hr/>
        <p>You will receive a receipt of your shopping cart sent to your email <strong>(<?php echo $email ?>)</strong> shortly.</p>
        <p>Order will be sent to the shipping address: <strong><?php echo $address.", ".$postcode." | ".$state.",".$country ?></strong></p>
        <a id="clear" style="float:right;" href="clear.php">Go HomePage ></a>
</body>
</html>