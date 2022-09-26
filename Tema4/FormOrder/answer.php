<?php
session_start();
include_once('header.php');
?>

<?php
if (isset($_SESSION['error']) || isset($_SESSION['comment'])) {
    if (isset($_SESSION['comment'])) {
        echo $_SESSION['comment'];
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