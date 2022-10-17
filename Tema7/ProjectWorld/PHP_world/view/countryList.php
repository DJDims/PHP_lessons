<?php
ob_start();
$title = 'Список стран - управление';
?>
<?php
if (isset($_SESSION['message'])) {
    echo '<div style=""text-align:left; margin-bottom: 5px; background-color: #e6e6de;><p>';
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    echo '</p></div>';
}
?>
<table class="table table-striped" style="margin:0">
    <div style="text-align: right; margin-bottom: 5px;">
        <a href="addCountry" class="btn btn-primary btn-sm btn-flat">New country</a>
    </div>
    <thead>
        <?php
            echo '<tr><td colspan="7" class="textposition">Total countries</td>';
            echo '<td>'.count($stateList).'</td></tr>';
        ?>
        <tr>
            <th style="width:5%">Nr</th>
            <th style="width:10%">Code</th>
            <th style="width:15%">Country name</th>
            <th style="width:10%">IndepYear</th>
            <th style="width:10%">Population</th>
            <th style="width:10%">Continent</th>
            <th style="width:25%">GovernmentForm</th>
            <th style="width:15%">Actions</th>
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
                <td>
                    <a href="editCountry?'.$state['Code'].'" class="btn btn-success btn-sm btn-flat">Edit</a>
                    <a href="deleteCountry?'.$state['Code'].'" class="btn btn-danger btn-sm btn-flat">Delete</a>
                </td>
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