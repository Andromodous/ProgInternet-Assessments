<?php
session_start();
$data= json_decode(file_get_contents("cars.json"));
$carID= $_GET['id'];
$exists=false;
if (!isset($_SESSION['cart'])) {
    $cart= array(); 
}
else {
    $cart= $_SESSION['cart'];
}
if($data->cars[$carID]->availability) { 
    $name= $data->cars[$carID]->brand." ".$data->cars[$carID]->model;
    if(count($cart)>0) {
    for($row=0; $row<sizeof($cart); $row++) {
        if ($cart[$row][0]==$carID) {
            $cart[$row][3]++;    
            $exists= true;
        }
    }
}
if (!$exists) {
    array_push($cart, array($carID, $name, $data->cars[$carID]->price, 1)); 
}
$total= 0.00;
for($row= 0; $row< sizeof($cart); $row++) {
        $total+= $cart[$row][2]*$cart[$row][3];
    }
    echo "Added to the cart successfully";
}
else {
    echo "Sorry, this car is not available now. Please try other cars";
}
    $_SESSION['cart']=$cart;
    $_SESSION['total']=$total;
?>