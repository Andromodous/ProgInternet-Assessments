<?php 
session_start();
$quantity= $_POST['quantity'];
$product= $_SESSION['product'];
$exists= false;
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart']=array(); 
}
else {
    $cart= $_SESSION['cart'];
}
if(count($cart)>0) {
    for($row=0; $row<sizeof($cart); $row++) {
        if ($cart[$row][0]==$product['product_id']) {
            $cart[$row][2]+=$quantity;    
            $exists= true;
        }
    }
}
if (!$exists) {
    array_push($cart, array($product['product_id'], $product['product_name'],$quantity, $product['unit_price']));
}
$total= 0.00;
for($row= 0; $row< sizeof($cart); $row++) {
        $total+= $cart[$row][2]*$cart[$row][3];
    }
    $_SESSION["cart"]= $cart;
    $_SESSION["total"]= $total;
    header("location:index.php");
    //$link= mysqli_connect("aa1vzdj8lvmatv6.cihtctks6w48.us-east-1.rds.amazonaws.com", "uts", "internet", "assignment1") or die("Could not connect to server");
    //$result= mysqli_query($link,"UPDATE products SET in_stock-=".$quantity);
    //mysqli_close($link);

?>