<?php
    session_start();
    if(isset($_SESSION['user'])){
        define('LOGIN', true);
    }
    else{
        define('LOGIN', false);
    }