

<?php
// если не указан обработчик, то обрабатывет текущий файл 
// или файл где форма импортирована
if($text):?>
<h1>Вы успешно зарегистрированы!</h1>
<?php
endif;
?>
<p><?=$info?></p>
<p><?=print_r($text)?></p>






<form action="#" method="POST" enctype="multipart/form-data">
    <label for='user-name'>Введите ваше имя</label>
    <input type="text" name="login" required/>
    <label for='password'>Введите ваш пароль</label>
    <input type="password" name="password" required/>
    <label for='email'>Введите ваш адрес электронной почты</label>
    <input type="email" name="email"/>
    <input type="submit" name="register" value="Зарегистрироваться"/>
    <p><?=$name?>
    
</form>
