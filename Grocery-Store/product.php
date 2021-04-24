<?php
session_start();
$product= $_GET['id'];
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart']=array(); 
}
else {
    $cart= $_SESSION['cart'];
}
$link= mysqli_connect("aa1vzdj8lvmatv6.cihtctks6w48.us-east-1.rds.amazonaws.com", "uts", "internet", "assignment1") or die("Could not connect to server");
$result= mysqli_query($link,"select * from products where product_id=".$product);
mysqli_close($link);
$row= mysqli_fetch_assoc($result);
$_SESSION['product']= $row;
header("location: index.php");
?>
