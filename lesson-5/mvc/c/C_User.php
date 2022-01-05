<?php
    include_once('m/registration.php');
    
    include_once('C_Base.php');

    class C_User extends C_Base {
        

        // public function userRegister($name,$email,$password)
        // {   
        //     getNewUser($name,$email,$password);
        // }


        public function actionRegister() {
            $vars = ['content'=> 'Форма регистрации'];
            $this->content = $this->template('v/v_form.php', $vars);
            
            
        }

        
    }



?>