<?php
ob_start();
$title = 'Государство';
?>

<?php
    echo '<div class="detail">';
    if (isset($state) && $state) {
        echo '<h3>'.$state['Name'].'</h3>';
        echo '<p><b>IndepYear:</b>'.$state['IndepYear'].'</p>';
        echo '<p><b>IndepYear:</b>'.$state['Population'].'</p>';
        echo '<p><b>IndepYear:</b>'.$state['Continent'].'</p>';
        echo '<p><b>IndepYear:</b>'.$state['GovernmentForm'].'</p>';
    }
?>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>