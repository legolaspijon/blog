<?php
require_once ROOT.'/models/user.php';
class Controller_User{
    
    /*
     * –егистраци¤ нового пользовател¤
     */
    public function Action_register(){
                
        $name = '';
        $password = '';
        $error = false;
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
        }

        if(!empty($name) && !empty($password)){
            if(!User::chekName($name)){
                $error[] = 'ќчень короткое им¤';
            }
            if(!User::chekPassword($password)){
                $error[] = 'ќчень очень длинный пароль';
            }
            if(User::is_exist($name)){
                $error[] = 'такое им¤ существует';
            }

            if($error == false){
                
                if(User::register($name, $password)){
                    $valid = '”спешна¤ регистраци¤';
                }
                
            }
        }
        
        require_once ROOT.'/views/user/reg.php';
    }
    
    /*
     * јвторизаци¤ пользавател¤
     */
    public function Action_login(){
        
        
        $error = false;
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            if($row = User::checkUserData($name, $password)){
                User::in($row);
                header('location: /');
            }
            else{
                $error[] = 'неверные данные';
            }
        }
        
        
         
       require_once ROOT.'/views/user/login.php'; 
         
    }
    
}