<?php
    require_once '../admin/config.php';
    $link = mysqli_connect(SERVER,USER,PASSWORD,DB) or die ("Error: ".mysqli_error($link));

         
    $name = trim(strip_tags($_POST['user-name']));
    $content = trim(strip_tags($_POST['feedback-text']));
    $sql = "INSERT INTO feedbacks (user_name, content) VALUES ('%s','%s')";
    $query = sprintf($sql, mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $content));

    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    } else {
        header("Location:../../index.php");
    }

?>