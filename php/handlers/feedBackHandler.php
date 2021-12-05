<?php 

    $name=$_POST['user-name'];
    $text=$_POST['feedback-text'];
    $alert="Enter correct name or text";

       

    if(strlen($text) && strlen($name)) {
        $url = "Location:../../index.php?text=$text&name=$name";
    } else {
        $url = "Location:../../index.php?alert=$alert";
        
    }
    
    header($url);
?>