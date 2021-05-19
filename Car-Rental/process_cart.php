<?php 
session_start();
$cart= $_SESSION['cart'];
$total=0.00;
foreach($_POST as $key => $val) {
    for($row=0; $row<sizeof($cart); $row++) {
        if ($cart[$row][0]==$key) {
            $cart[$row][3]=$val;    
        }
    }
}
foreach($cart as $vehicle) {
    $total= $total + $vehicle[2]*$vehicle[3];
}
$_SESSION['total']=$total;
$_SESSION['cart']=$cart;
header("location:checkout.php");
?>