<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <div class="header">
        <h1><?=$title?></h1>
        
        <p>В сети сейчас <?php echo $user? $user : 'пусто'?></p>
        <?php
            if($user) {
                echo "<a href=\"index.php?c=user&act=Info\">Личный кабинет</a> | <a href='index.php?c=user&act=Logout'>Выйти </a>";
            } else {
                echo "<a href='index.php?c=user&act=Login'>Войти</a> | <a href='index.php?c=user&act=Register'> Регистрация </a>";
            }
        ?>
    </div>
    <div id="content">
        <?=$content?>
    </div> 
    <footer>
        <a href="index.php">На главную</a>
    </footer>
</body>
</html>