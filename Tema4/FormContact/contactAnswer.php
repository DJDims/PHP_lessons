<?php
session_start();
include_once('header.php');
include_once('contactHeader.php');
?>

<?php
if (isset($_SESSION['error']) || isset($_SESSION['comment'])) {
    if (isset($_SESSION['comment'])) {
        echo '<h3>Отправка сообщения</h3>';
        echo '<h4>Сообщение отправлено. Спасибо.</h4><hr>';
        echo '<p>Ваше сообщение: <br>'.$_SESSION['comment'].'</p>';
        echo '<hr><p><a href="contactForm.php">Написать сообщение<a></p>';
        unset($_SESSION['comment']);
    } elseif (isset($_SESSION['error'])) {
        echo '<h3>Сообщение об ошибке</h3>';
        echo '<p>'.$_SESSION['error'].'</p>';
        echo '<hr><p><a href="contactForm.php">Написать сообщение<a></p>';
        unset($_SESSION['error']);
    }
}else {
    header('Location: contactForm.php');
}
session_destroy();
?>

<?php
include_once('footer.php');
?>