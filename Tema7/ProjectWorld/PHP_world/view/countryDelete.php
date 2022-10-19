<?php
    ob_start();
    $title = 'Удалить страну';
?>

<div class="box-header with-border">
    <h3 class="box-title"><strong>Manage - Delete country</strong></h3>
    <?php if (isset($error)) {
        echo '<p>'.$error.'</p>';
    }?>
</div>
<div>
    <form action="deleteResult?<?php echo $country['Code'];?>" method='POST'>
        <div class="col-md-12" style="margin-top:10px;">
            <div class="form-group">
                <strong>Code:</strong>
                <input type="text" name="Code" class="form-control" value="<?php echo $country['Code'];?>" maxlength="3" readonly>
            </div>
        </div>
        <div class="col-md-12" style="margin-top:10px;">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="Code" class="form-control" value="<?php echo $country['Name'];?>" maxlength="3" readonly>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top:10px;">
            <button type="submit" class="btn btn-primary" name="send">Delete country</button>
            <a href="countryList" type="button" class="btn btn-primary">Back to list</a>
        </div>
    </form>
</div>

<?php
    $content = ob_get_clean();
    include "view/templates/layout.php";
?>