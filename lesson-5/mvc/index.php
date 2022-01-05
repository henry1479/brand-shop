<?php


spl_autoload_register(function($class){
    
    include_once("./c/".$class.".php");  
});



$action = 'action';
$action .= (isset($_GET['act']) ? $_GET['act'] : 'Index');


switch ($_GET['c'])
{
    case 'articles':
        $controller = new C_Page();
        break;
    case 'User':
        $controller = new C_User();
        break;
    default:
        $controller = new C_Page();
}


$controller -> request($action);
?>