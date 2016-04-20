<?php

    class Router{
        
        private $routes;
        public function __construct() {
            $routes = ROOT.'/config/routes.php';
            $this->routes = include($routes);
        }

        public function go(){
            $url = trim($_SERVER['REQUEST_URI'],'/');

            if (empty($url)) {
               $url = 'index/index';
            }
           
            foreach ($this->routes as $pattern => $path){
                if(preg_match("~$pattern~", $url)){
					$param = array();
                    $url = preg_replace("~$pattern~", $path, $url);   
                    $path_seg = explode('/', $url);
                    $controller_name = 'Controller_'.ucfirst(array_shift($path_seg));
                    $action_name = 'Action_'.array_shift($path_seg);
					$param = $path_seg;
					$segments = array_shift($path_seg);
                    if(file_exists(ROOT."/controllers/$controller_name.php")){
                        require_once ROOT."/controllers/$controller_name.php";
                        
                        $controller = new $controller_name();
                       
                        call_user_func_array(array($controller, $action_name), $param);
                         

                    }
                    die;
                }
               
                
                
            }
        }
        
        
    }