<?php
    define('ROOT', dirname(__FILE__));
    
    require_once ROOT.'/config/user_check.php';
    require_once ROOT.'/config/Db.php';
    require_once ROOT.'/controllers/router.php';
    $start = new Router();
    $start->go();