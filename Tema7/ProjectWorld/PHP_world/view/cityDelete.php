<?php
    ob_start();
    $title = 'Удалить город';
?>

<div class="box-header with-border">
    <h3 class="box-title"><strong>Manage - Delete city</strong></h3>
    <?php if (isset($error)) {
        echo '<p>'.$error.'</p>';
    }?>
</div>
<div>
    <form action="deleteCityResult?<?php echo $city['ID'];?>" method='POST'>
        <div class="col-md-12" style="margin-top:10px;">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="Code" class="form-control" value="<?php echo $city['Name'];?>" maxlength="3" readonly>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top:10px;">
            <button type="submit" class="btn btn-primary" name="send">Delete city</button>
            <a href="countryList" type="button" class="btn btn-primary">Back to list</a>
        </div>
    </form>
</div>

<?php
    $content = ob_get_clean();
    include "view/templates/layout.php";
?>