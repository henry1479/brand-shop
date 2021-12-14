<?php

    require_once "db.php";


     function getAllFeedbacks($link) {
        $query = "SELECT * FROM feedbacks ORDER BY id desc";
        $result = mysqli_query($link, $query);
    
    
        if(!$result) {
            die(mysqli_error($link));
        }
    
       
        $feedbacks = [];
    
       
        while($data = mysqli_fetch_assoc($result)) {
            $feedbacks[] = $data;
        }
    
        return $feedbacks;
    
    
    }
?>