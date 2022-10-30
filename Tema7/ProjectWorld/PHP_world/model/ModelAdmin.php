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

    public static function ChangePassword(){
        $result = array(false, 'Incorrect password');
        if (isset($_POST['send'])) {
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];
            if ($newPassword !== "" && $newPassword == $confirmPassword) {
                $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
                $query = "UPDATE `users` SET `password` = '$passwordHash' WHERE `users`.`id` = ".$_SESSION['userId'];
                $db = new database();
                $response = $db -> executeRun($query);
                if ($response == true) {
                    $result = array(true, "Password changed");
                } else {
                    $result = array(false, "No insert change password");
                }
            }
        }
        return $result;
    }
}
?>