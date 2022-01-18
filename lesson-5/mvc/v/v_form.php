<?php
include_once('m/registration.php');
$user = new C_User();
if(isset($_POST['register'])) {
    $name   = ($_POST['name']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);
    getNewUser($name, $email, $password);
}



?>




<p><?=$content?></p>
<form action="#" method="POST" enctype="multipart/form-data">
    <label for='user-name'>Введите ваше имя</label>
    <input type="text" name="user-name"/>
    <label for='password'>Введите ваш пароль</label>
    <input type="password" name="password"/>
    <label for='email'>Введите ваш адрес электронной почты</label>
    <input type="email" name="email"/>
    <input type="submit" name="register" value="Зарегистрироваться"/>
    <p><?=$name?>
</form>