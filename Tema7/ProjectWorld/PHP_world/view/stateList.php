<?php
ob_start();
$title = 'Список стран';
?>
<table class="table table-striped" style="margin:0">
    <thead>
        <?php
            echo '<tr><td colspan="7" class="textposition">Total countries</td>';
            echo '<td>'.count($stateList).'</td></tr>';
        ?>
        <tr>
            <th style="width:5%">Nr</th>
            <th style="width:10%">Code</th>
            <th style="width:10%">Country name</th>
            <th style="width:10%">IndepYear</th>
            <th style="width:10%">Population</th>
            <th style="width:10%">Continent</th>
            <th style="width:30%">GovernmentForm</th>
            <th style="width:15%">Cities</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($stateList as $key => $state) {
            echo '<tr>
                <td>'.($key+1).'</td>
                <td>'.$state['Code'].'</td>
                <td>'.$state['Name'].'</td>
                <td>'.$state['IndepYear'].'</td>
                <td>'.$state['Population'].'</td>
                <td>'.$state['Continent'].'</td>
                <td>'.$state['GovernmentForm'].'</td>
                <td><a href="citiesState?'.$state['Code'].'">Cities by State</a></td>
                </tr>';
        }
        echo '<tr><td colspan="7" class="textposition">Total countries</td>';
        echo '<td>'.count($stateList).'</td></tr>';
        ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>