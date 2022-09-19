<h2>PHP example</h2>
<hr>
<?php
    echo '<h3>Hello, world</h3>';
    echo '<hr>';
?>
<?php
    echo '<h3>Переменные</h3>';
    $var1 = 10;
    $var2 = 15;
    $summ = $var1 + $var2;
    echo $var1.'+'.$var2.'='.$summ;
    echo '<hr>';
?>
<?php
    echo '<h3>Оператор if</h3>';
    $name = 'Dmitrii';
    $age = 18;
    if ($age > 12)
        $comment = 'Подросток';
    elseif ($age >= 0 && $age <= 12)
        $comment = 'Ребенок';
    else
        $comment = 'Ошибка ввода';
    
    echo 'Имя '.$name.'Возраст '.$age.' лет - '.$comment;
    echo '<hr>';
?>