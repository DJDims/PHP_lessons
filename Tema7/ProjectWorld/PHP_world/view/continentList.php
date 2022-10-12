<?php
ob_start();
$title = 'Список континентов';
?>

<div class="col-md-12">
    <div class="menyline">
        <ul class="menyul">
            <?php
                echo '<li class="meny">';
                echo '<a href="continent">All</a>';
                echo '</li>';
                foreach ($continentList as $key => $continent) {
                    echo '<li class="meny">';
                    echo '<a href="continentState?' . $continent['continent'] . '">' . $continent['continent'] . '</a>';
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
</div>

<table class="table table-striped">
    <?php
    echo '<tr><td colspan="6" class="textposition">Total countries</td>';
    echo '<td>'.count($stateList).'</td></tr>';
    ?>
    <tr>
        <th style="width:10%">Nr</th>
        <th style="width:10%">Code</th>
        <th style="width:10%">Country name</th>
        <th style="width:10%">IndepYear</th>
        <th style="width:10%">Population</th>
        <th style="width:30%">GovernmentForm</th>
        <th style="width:15%">Cities</th>
    </tr>
    <tbody>
        <?php
        
        foreach ($stateList as $key => $state) {
            echo '<tr>
            <td>'.($key+1).'</td>
            <td>'.$state['Code'].'</td>
            <td>'.$state['Name'].'</td>
            <td>'.$state['IndepYear'].'</td>
            <td>'.$state['Population'].'</td>
            <td>'.$state['GovernmentForm'].'</td>
            <td><a href="citiesState?'.$state['Code'].'">Cities by state</a></td>
            </tr>';
        }
        echo '<tr><td colspan="6" class="textposition">Total countries</td>';
        echo '<td>'.count($stateList).'</td></tr>';
        ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>