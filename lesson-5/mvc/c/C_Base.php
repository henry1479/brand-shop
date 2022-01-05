<?php
include_once('C_Controller.php');

// базовый класс сайта

abstract class C_Base extends C_Controller 
{
    protected $title; // заголовок страницы
    protected $content; //  содержание страницы






    

    protected function before() {
        $this -> title = "Название сайта";
        $this -> content = '';
    }

    // генерация базвового шаблона

    public function render() {
        $vars = array('title'=> $this->title, 'content'=>$this->content);
        $page = $this->template('v/v_main.php', $vars);
        echo $page;
    }
}


?>