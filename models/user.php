<?php

class User{
    
    public static function register($name, $password){
        $query = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
        $res = mysql_query($query);
        if($res) return true;
        else return false;
    }
    
    public static function chekPassword($password){
        if (strlen($password) <= 6){
            return true;
        }
        else{
            return false;
        }
    }
    public static function chekName($name){
        if (strlen($name) > 2){
            return true;
        }
        else{
            return false;
        }
    }
    
    public static function is_exist($name){
        $query = "SELECT * FROM users WHERE name='$name'";
        $res = mysql_query($query);
        if(mysql_fetch_row($res) > 0){
            return true;
        }
        return false;
    }
    
    public static function checkUserData($name, $password){

        $query = "SELECT * FROM users WHERE password='$password' AND name='$name'";
        $res = mysql_query($query);
        $row = mysql_fetch_assoc($res);
        if (!$res) {
            return false;
        }
        else{
            return $row['id']; 
        }
 
    }

    public static function in($id){
        session_start();
        $_SESSION['user'] = $id;
    }
    
    
    public static function checkLogged(){
        
        if (isset($_SESSION['user'])) {
            echo 'существует';
        }
        
    }
    
    
    
}