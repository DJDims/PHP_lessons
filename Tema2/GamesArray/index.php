<link rel="stylesheet" href="css/style.css">

<div id="content">
<?php
include_once 'games.php';

$text = '';

foreach ($games as $game => $value) {
    $text .= '<div class="card">';
    $text .= '<h2>'.$value['title'].'</h2>';
    $text .= '<div class="cardBody">';
    $text .= '<img src="'.$value['poster'].'">';
    $text .= '<p>'.$value['description'].'</p>';
    if (count($value['characters'])>0) {
        $text .= '<ul>';
        foreach ($value['characters'] as $character) {
            $text .= '<li>'.$character.'</li>';
        }
        $text .= '</ul>';
    }
    $text .= '</div>';
    $text .= '</div>';
}
echo $text;
    
?>
</div>

<footer>
    <p>Kreivald Dmitrii</p>
    <p>Julia Badanova</p>
    <p>JPTV20</p>
    <p>21-09-2022</p>
</footer>
