<?php
class ModelAdmin{
    public static function userLogin(){
        $test = false;
        $_SESSION['error'] = 'Неправильное имя пользователя или пароль';
        if (isset($_POST['send'])) {
            if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != ""&& $_POST['password'] != "") {
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $password = $_POST['password'];
                $query = 'SELECT * FROM `users` WHERE `email` = "'.$email.'"';
                $db = new database();
                $response = $db -> getOne($query);

                if ($response != null) {
                    $login = strtolower($email);
                    if ($login == $response['email'] && password_verify($password, $response['password'])) {
                        $_SESSION['sessionId'] = session_id();
                        $_SESSION['name'] = $response['username'];
                        $_SESSION['role'] = $response['role'];
                        $_SESSION['userId'] = $response['id'];
                        $test = true;
                    }
                }
            }
        }
        return $test;
    }

    public static function userLogout(){
        unset($_SESSION['sessionId']);
        unset($_SESSION['name']);
        unset($_SESSION['role']);
        unset($_SESSION['userId']);
        unset($_SESSION['error']);
        session_destroy();
        return;
    }
}
?>