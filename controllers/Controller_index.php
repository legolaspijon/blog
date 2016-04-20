<?php
    require_once ROOT.'/models/articles.php';
    class Controller_index{

        public function Action_index(){
            $listNew = array();
            $listNew = Index::get_News_list();
            require_once ROOT.'/views/index.php';
        }
		
		
        public function Action_show($id){
            $new = Index::get_New($id);
            if($new){
                require_once ROOT.'/views/show_new.php';
            }
            else {
                header('location: /');
            }
        }
       
        public function Action_delete($id){
            $new = Index::delete_New($id);
            header('location: /');
        }
        
        public function Action_add() {
            
            if(isset($_POST['submit'])){
                $title = htmlspecialchars($_POST['title']);
                $text = htmlspecialchars($_POST['text']);
                $discription = htmlspecialchars($_POST['discription']);
                if(!empty($title) && !empty($text) && !empty($discription)){
                    if(Index::add_new($title, $text, $discription)){
                        $status = 'новость успешно добавлена';
                    }
                    else{
                        $status = 'ошибка добавления';
                    }
                }
                else{
                    $status = 'некоторые поля не заполнены';
                }
            }
            require_once ROOT.'/views/add.php';
        }
        
        
        
        public function Action_update($id){
            $row = Index::get_New($id);
            if(isset($_POST['submit'])){
                $title = htmlspecialchars($_POST['title']);
                $text = htmlspecialchars($_POST['text']);
                $discription = htmlspecialchars($_POST['discription']);
                if(!empty($title) && !empty($text) && !empty($discription)){
                    $res = Index::update_new($title, $text, $discription, $id);
                    header('location: /');
                }
            }

            require_once ROOT.'/views/update.php';
        }

        public function Action_logout() {
            unset($_SESSION['user']);
            header('location: /');
        }

    }