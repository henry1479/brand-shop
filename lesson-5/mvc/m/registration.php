<?php
    include_once('./data/configDB.php');
    function getNewUser($name,$email,$password){
        try {
            $db = new PDO ('mysql:host='.SERVER.';dbname='.DBNAME, USER, PASSWORD);
            $stm = $db->prepare('INSERT INTO `users`( `name`, `password`, `email`) VALUES (`name:name`, `password:password`,`email:email`)');
            $stm -> execute(['name'=>$name,'password'=>$password, 'email'=>$email]);
        }   catch(PDOException $e) {
            die ("Error " . $e ->getMessage());
        }
        return true;

    }



?>