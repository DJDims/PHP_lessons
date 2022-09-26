<?php
include('array.php');
session_start();
if (isset($_POST['send'])) {
    $errorString = '';

    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $product = $_POST['product'];

    $sushiName = $sushiArray[$product]['name'];
    $sushiPrice = $sushiArray[$product]['price'];
    $endPrice = $sushiArray[$product]['price'] * $quantity;

    if (trim($name) == '') {
        $errorString .= 'Имя получателя не введено<br>';
    }
    if (trim($adress) == '') {
        $errorString .= 'Адресс не введен<br>';
    }
    if (trim($phone) == '') {
        $errorString .= 'Телефон не введен<br>';
    }
    if ($quantity > 10 || $quantity < 1) {
        $errorString .= 'Введено неверное количество<br>';
    }
    if ($product == '') {
        $errorString .= 'Продукт не выбран<br>';
    }
    if ($errorString == '') {
        $comment = "
        Доставка для $name<br>
        По адресу $adress<br>
        Контактный телефон: $phone<br>
        Заказ:
        $sushiName $sushiPrice € x $quantity <br>
        К оплате: $endPrice €
        ";
        $_SESSION['comment'] = $comment;
    } elseif ($errorString != '') {
        $_SESSION['error'] = $errorString;
    }
    header('Location: answer.php');
}else {
    header('Location: contactForm.php');
}
?>