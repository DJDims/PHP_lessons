<?php
ob_start();
$title = 'Список городов - управление';
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
        <a href="addCity" class="btn btn-primary btn-sm btn-flat">New city</a>
    </div>
    <thead>
        <?php
            echo '<tr><td colspan="3" class="textposition">Total cities</td>';
            echo '<td>'.count($cityList).'</td></tr>';
        ?>
        <tr>
            <th style="width:20%">Nr</th>
            <th style="width:20%">City name</th>
            <th style="width:20%">CountryCode</th>
            <th style="width:20%">Population</th>
            <th style="width:30%">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cityList as $key => $city) {
            echo '<tr>
                <td>'.($key+1).'</td>
                <td>'.$city['Name'].'</td>
                <td>'.$city['CountryCode'].'</td>
                <td>'.$city['Population'].'</td>
                <td>
                    <a href="editCity?'.$city['ID'].'" class="btn btn-success btn-sm btn-flat" style="margin-left: 5px">Edit</a>
                    <a href="deleteCity?'.$city['ID'].'" class="btn btn-danger btn-sm btn-flat" style="margin-left: 5px">Delete</a>
                    </td>
                </tr>';
        }
        echo '<tr><td colspan="3" class="textposition">Total cities</td>';
        echo '<td>'.count($cityList).'</td></tr>';
        ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>