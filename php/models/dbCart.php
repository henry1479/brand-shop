<?php

function getGoodFromCartById($link, $id) {
    $query = sprintf("SELECT * FROM cart where good_id=%d", (int)$id);
    $result = mysqli_query($link, $query);
    if(!$result) {
        die(mysqli_query($link, $query));

    }
    $good = mysqli_fetch_assoc($result);
    return $good;
}


function incrementNumberItemsOfGood($link,$id) {
    $sql = "UPDATE cart SET count=count+1 WHERE good_id=$id";
    $result = mysqli_query($link,$sql);

    if(!$result) 
        die(mysqli_error($link));
    // возвращаем количество измененных строк
    return mysqli_affected_rows($link);
}


function addGoodToCart($link, $good_id, $count, $login=null) {
    $sql = "INSERT INTO cart (good_id, count, login) VALUES ('%d','%d','%s')";
    $query = sprintf($sql, mysqli_real_escape_string($link,$good_id), mysqli_real_escape_string($link, $count),mysqli_real_escape_string($link, $login));
    $result = mysqli_query($link, $query);
    if(!$result) {
        die(mysqli_error($link));
    }
    return true;
}

function getGoodsByCartId ($link) {
    $sql = "SELECT goods.name, goods.price, goods.image, cart.count, cart.good_id FROM goods INNER JOIN cart ON goods.id=cart.good_id";
    $result = mysqli_query($link, $sql);
    if(!$result) {
        die(mysqli_query($link, $sql));
    }
    while($data = mysqli_fetch_assoc($result)){
        $goods[] = $data;
    }
    return $goods;
}



?>