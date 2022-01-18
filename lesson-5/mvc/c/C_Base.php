<?php
include_once('C_Controller.php');
include_once('./m/User.php');

// базовый класс сайта

abstract class C_Base extends C_Controller 
{
    protected $title; // заголовок страницы
    protected $content; //  содержание страницы






    

    protected function before() {
        $this -> title = 'Тестовый  сайт';
        $this -> content = '';
    }

    // генерация базвового шаблона

    public function render() {
        $user = new User;
        session_start();
        if(isset($_SESSION['user_id'])) {
            $userInfo = $user->getUser($_SESSION['user_id']);
        } else {
            $userInfo['login'] = false;
        }

        $vars = array('title'=> $this->title, 'content'=>$this->content, 'user' => $userInfo['login']);
        $page = $this->template('v/v_main.php', $vars);
        echo $page;
    }
}


?>