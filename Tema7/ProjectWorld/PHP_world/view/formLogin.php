<?php
ob_start();
$title = "Login";
?>
<div style="margin-top: 5px;">
    <form class="form-signin" action="loginResult" method="POST">
        <h3 class="form-signin-heading">Введите ваши данные</h3>
        <input type="email" name="email" placeholder="Email" class="from-control" required autofocus>
        <input type="password" name="password" placeholder="Password" class="from-control" required>
        <button class="btn btn-primary btn-block" type="submit" name="send">Войти</button>
        <p style="padding-top: 10px;">
        <?php 
            if(isset($_SESSION['error'])) {
                echo $_SESSION['error']; unset($_SESSION['error']);
            }
        ?>
        </p>
    </form>
</div>
<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>