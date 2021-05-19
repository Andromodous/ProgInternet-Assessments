<?php 
session_start();
$carID= $_GET['id'];
$cart= $_SESSION['cart'];
$size= sizeof($cart);
for($row=0; $row<$size; $row++) {
    if($cart[$row][0]==$carID) {
        unset($cart[$row]);
    }
}
$_SESSION['cart']= $cart;
echo "Item Removed, Please refresh page" ;
?>