<?php 
session_start();
$row= $_SESSION['product'];
?>
<!DOCTYPE html>
<html>
  <head>
  <meta chsarset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 4.0.0 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- Font-Awesome 4.7.0 -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title><?php echo $row["product_name"]?> | Grocery-Store</title>
  <link rel="stylesheet" href="style.css">  
  </head>
  <body>
  <?php
  if (!empty($row)) {
  ?>
  <div class="product">
<center><h4><?php echo $row["product_name"] ?> / <?php echo $row['unit_quantity'] ?> </h4></center>
<center><h4>$<?php echo $row["unit_price"] ?> </h4></center>
<hr/>
<div class="banner"><center><p>Only <?php echo $row['in_stock'] ?> in Stock!</p></center></div>
<form method="POST" action="processCart.php" onsubmit="return validateQuantity()" target="_parent" >
    <div class="form-group">
      <label for="quantity"><b>Quantity:</b></label>
      <input type="number" class="form-control"  placeholder="quantity" id="quantity" name="quantity" value="1"/>
    </div>
    <div class="alert alert-warning" id="warning" style="display:none;">
    </div>
    <button type="submit" value="Submit" id="add">Add to Cart <i class="fa fa-plus" ></i></button>
</form>
</div>
<?php  
}
else { ?>
  <center><h4>No Product is selected</h4></center>
  <hr/>
  <center><h4>Please select a Product in the Product List</h4></center>
<?php   
}
?>
</body>
<script src="script.js"></script>
</html>