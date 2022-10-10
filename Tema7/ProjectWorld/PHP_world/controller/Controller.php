<?php
class Controller { 
    public static function StartSite(){
        include_once('view/homepage.php');
        return;
    }
    
    public static function error404(){
        include_once('view/error404.php');
        return;
    }
}
?>
