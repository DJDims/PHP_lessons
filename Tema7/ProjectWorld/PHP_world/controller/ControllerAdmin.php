<?php
class ControllerAdmin{
    public static function FormLogin(){
        include_once('view/formLogin.php');
        return;
    }
    
    public static function LoginAction(){
        $result = ModelAdmin::userLogin();
        if (isset($result) && $result == true) {
            include_once('view/startManage.php');
        } else {
            include_once('view/formLogin.php');
        }
        return;
    }
    public static function LogoutAction(){
        $result = ModelAdmin::userLogout();
        include_once('view/formLogin.php');
        return;
    }

    public static function FormProfile(){
        include_once('view/profileTable.php');
    }
    public static function profileEditResult(){
        $result = ModelAdmin::ChangePassword();
        include_once('view/profileTable.php');
    }
}
?>