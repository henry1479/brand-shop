<?php
include "../models/dbCart.php";
const SERVER = "localhost" ;
const USER = "root";
const PASSWORD = "";
const DB = "brand_shop";

print_r($_POST);
$link = mysqli_connect(SERVER,USER,PASSWORD,DB) or die ("Error: ".mysqli_error($link));
$count = 1;


$id = (int)($_POST['id']);
if(isset($_SESSION['login']) && isset($_SESSION['password'])){
    $login = $_SESSION['login'];
}

$cartGood = getGoodFromCartById($link,$id);
if(isset($cartGood)) {
    $id = $cartGood['good_id'];
    incrementNumberItemsOfGood($link,$id);
    
} elseif (isset($cartGood) && isset($_POST['count'])) {
    $count =(int)$_POST['count'];
    addCount($link,$id,$count);
}     
else {
    addGoodToCart($link, $id, $count, $login);
}

echo "<a href='../../cart.php'><u>Go to Cart</u></a>";




?>