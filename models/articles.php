<?php
    class Index{
        
        public static function get_News_list(){
            $user_id = $_SESSION['user'];
            $rowlist = false;
            if (empty($user_id)) {
                header('location: /login');
            }
            $query = "SELECT * FROM news WHERE user_id='$user_id' ORDER BY id DESC";
            $res = mysql_query($query);
            if(mysql_num_rows($res) > 0){
                $i = 0;
                while ($row = mysql_fetch_assoc($res)){
                    $rowlist[$i]['id'] = $row['id'];
                    $rowlist[$i]['discription'] = $row['discription'];
                    $rowlist[$i]['title'] = $row['title']; 
                    $rowlist[$i]['text'] = $row['text'];
                    $i++;
                }
                
            }else{
                return $rowlist;
            }
            
            return $rowlist;
            
        }
        
        public static function get_New($id){
            $query = "SELECT * FROM news WHERE id='$id'";
            $res = mysql_query($query);
            $len = mysql_num_rows($res);       
            if($len > 0){
               $row = mysql_fetch_assoc($res);
               return $row; 
            }
            else{
                return false;
            }
            
            
        }
        
        public static function delete_New($id){
            $query = "DELETE FROM news WHERE id='$id'";
            $res = mysql_query($query);
             if($res){
                 return true;
             }
             else{
                 return false;
             }

        }
        
        
        // добавление
        public static function add_new($title, $text, $discription){
            $user_id = $_SESSION['user'];
            $query = "INSERT INTO news (title, text, discription, user_id) VALUES ('$title', '$text', '$discription','$user_id')";
            $res = mysql_query($query);
            if($res) return true;
            else return false;
        }
        
        // изменение
        public static function update_new($title, $text, $discription, $id){
            $query = "UPDATE news SET title='$title', discription='$discription', text='$text' WHERE id='$id'";
            $res = mysql_query($query);
            if($res) return true;
            else return false;
        }
        
    }