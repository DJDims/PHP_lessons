<?php
    echo '<h2>Массивы</h2>';
    echo '<hr>';
?>
<?php
    echo '<h3>Задача1</h3>';
    $numbers = array(9, 8, 7, 6, 5, 4, 3);
    foreach($numbers as $num){
        echo $num.' ';
    }
    echo '<hr>';
?>
<?php
    echo '<h3>Задача2</h3>';
    $countries = array('Esti', 'Russia', 'Norway', 'Japan');
    $text = '';
    foreach($countries as $country) {
        $text.='<li>'.$country.'</li>';
    }
    echo '<h3>Список городов</h3>';
    echo '<ul>'.$text.'</ul>';
    echo '<hr>';
?>
<?php
    echo '<h3>Задача3</h3>';
    $newCountries = array(array(0, 'Эстония', 'Таллин'),
                    array(1, 'Россия', 'Москва'),
                    array(2, 'Германия', 'Берлин'));
    echo '<h2>Государства - столица</h2>';
    $k = 0;
    foreach ($newCountries as $country) {
        $k++;
        echo $k.'. <b>'.$country[1].'</b>';
        echo ' - '.$country[2].'<br>';
    }
    echo '<p>Всего в списке: '.count($newCountries).'</p>';
    echo '<hr>';
?>
<?php
    echo '<h3>Задача4</h3>';
    $myCountries = array(
                    array(
                        'id'=> 0,
                        'name' => 'Эстония',
                        'capital' => 'Таллин',
                        'cities' => array('Narva', 'Jõhvi')
                    ),
                    array(
                        'id'=> 1,
                        'name' => 'Россия',
                        'capital' => 'Москва',
                        'cities' => array('Omsk', 'Piter')
                    ),
                    array(
                        'id'=> 2,
                        'name' => 'Германия',
                        'capital' => 'Берлин',
                        'cities' => array('Rostok', 'Munich')
                    ),
                );
    echo '<h2>Государства, города</h2>';
    foreach ($myCountries as $country) {
        echo $country['name'].' - '.$country['capital'];
        echo '<ul>';
        foreach ($country['cities'] as $city) {
            echo '<li>'.$city.'</li>';
        }
        echo '</ul>';
    }
    echo '<hr>';
?>