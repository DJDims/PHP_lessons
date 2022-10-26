<?php
ob_start();
$title = 'Изменение страны';
?>

<?php
$continents = array('Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America');
?>
<div class="box-header with-border">
    <h3 class="box-title"><strong> Manage - Edit city</strong></h3>
    <?php
    if (isset($error)) echo '<p>' . $error . '</p>';
    ?>
</div>
<div>
    <form action="addCityResult" method="POST">
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name *:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name city" required value="<?php echo $city['Name']?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Country:</strong>
                    <select name="Code" class="form-control">
                        <?php
                        foreach ($countries as $country) {
                            if ($country['Code'] == $city['CountryCode']) {
                                echo '<option value="' . $country['Code'] . '" selected>' . $country['Name']. '</option>';
                            } else {
                                echo '<option value="' . $country['Code'] . '" >' . $country['Name']. '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Population:</strong>
                    <input type="text" name="Population" class="form-control" placeholder="Population" value="<?php echo $city['Population']?>" min="0">
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Save city</button>
                <a href="cityListManage" type="button" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </form>
</div>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>