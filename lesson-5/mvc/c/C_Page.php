<?php
include_once('C_Base.php');





class C_Page extends C_Base
{   
    public function actionIndex() {
        
        $this->content = "Это контент главной страницы";
    }
}



?>