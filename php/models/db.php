<?php
    require_once "./php/admin/config.php";
    // коннект с базой данных
    $link = mysqli_connect(SERVER,USER,PASSWORD,DB) or die ("Error: ".mysqli_error($link));
    // если нет кодировки utf-8 
    // вывести ошибку
//     if(!mysqli_set_charset($link, "utf-8")) {
//         printf("Error: " .mysqli_error($link));
//     }
// ?>