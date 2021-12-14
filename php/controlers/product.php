<?php
include "../models/dbGoods.php";

// получаем массив товаров

$goods = getAllGoods($link);

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}




?>