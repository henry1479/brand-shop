<?php

require_once "db.php";
// функция добавялет новый товар
function addGood($link,$name, $price, $description, $src) {
    // делаем строку запроса к бд
    // используем маркеры
    $sql = "INSERT INTO goods (name, price, description, src)VALUES ('%s','%s','%s','%s')";
    $query = sprintf($sql, mysqli_real_escape_string($link,$name), mysqli_real_escape_string($link, $description),mysqli_real_escape_string($link, $price),mysqli_real_escape_string($link, $src));

    $result = mysqli_query($link, $query);

    // обработка ошибкм
    if(!$result) {
        die(mysqli_error($link));
    }
    return true;

}
// получает все товары из бд

function getAllGoods($link, $number=2, $id=0) {
    $query = "SELECT * FROM goods  WHERE id>$id limit $number ";
    $result = mysqli_query($link, $query);


    if(!$result) {
        die(mysqli_error($link));
    }

   
    $goods = [];

    //  добавляем в массив goods
    // строки в виде массивов
    while($data = mysqli_fetch_assoc($result)) {
        $goods[] = $data;
    }

    return $goods;


}

// получает товар по id
// применяется в карточке описания товара
function getGoodById($link,$id){
    // формируем строку запроса, используя маркер
    $query = sprintf("SELECT * FROM goods WHERE id=%id, (int)$id");
    $result = mysqli_query($link,$query);

    if(!$result) {
        die(mysqli_error($link));
    }

    $good = mysqli_fetch_assoc($result);
        return $good;

}

// функция удаляет товар из бд
function removeGoodById($link, $id) {
    $id = (int)$id;
    if($id == 0) return false;

    $query = sprintf("DELETE FROM goods WHERE id='%id', $id");
    $result = mysqli_query($link,$query);

    $goods = mysqli_fetch_assoc($result);

    return $goods;

}




?>