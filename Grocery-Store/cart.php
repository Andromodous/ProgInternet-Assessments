<?php 
session_start();
$total=$_SESSION['total'];
$cart= $_SESSION['cart'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Bootstrap 4.0.0 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Cart | Grocery-Store</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        if (!count($cart)>0 || !isset($cart)) { ?>
        <center><h4>Cart is empty</h4></center>
        <hr/>
        <center><h4>Please Add items to Cart</h4></center>
        <?php } 
        else { 
        ?>
        <center><h3>Shopping Cart</h3></h4></center>
        <table>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Cost</th>
                <th>Item-Cost</th>
            </tr>
        <?php
        if(count($cart)>0) {
            foreach($cart as $row) { ?>
                   <tr>
                   <td><p><?php echo $row[1]?></p></td>
                   <td><p><?php echo $row[2]?></p></td>
                   <td><p>$<?php echo number_format($row[3],2)?></p></td>
                   <td><p>$<?php echo number_format($row[2]*$row[3],2)?></p></td>
                   </tr>
    <?php
            }
        }
        ?>
        </table>
        <div style="text-align:right;">
        <hr style="margin:3% 0;"/>
        <p>Total-Cost: $<?php echo number_format($total,2)?></p>
        <a id="checkout" alt="checkout" href="checkout.php" target="_blank">Check Out ></a>
        <a id="clear" alt="clear" href="clear.php" target="_parent">Clear All</a>
        </div>
        <?php } 
        ?>
    </body>
</html>