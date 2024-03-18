<div class="form-wrapper">
    <div class="close">
        <span type="button" class="form-close">
            <i class="fas fa-times-circle blue-color"></i>
        </span>
    </div>
    <div class="add-pages">
        <h3 class="border-bottom"><?= ucwords($action) ?> Media</h3>
        <form id="<?= $action ?>-ae-<?= $formname ?>-form" class="container add-form" method="post" data-action="<?= $action ?>" data-formname="<?=$formname?>" enctype="multipart/form-data">
            <div class="row form-fields">

                <?php
                $selected_val = '';
                if (isset($id) && !empty($id)) {
                    $selected_val = $id;
                }
                ?>
                <input type="hidden" name="attr_id" value="<?=$selected_val?>" />



                <?php
                $selected_val = '';
                if (isset($type) && !empty($type)) {
                    $selected_val = $type;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="type">Media Type</label>
                    <select id="type" class="form-control" name="type">
                        <option value="" >--select Type--</option>
                        <option value="jpeg" <?= ($selected_val == 'jpeg' ? 'selected' : '') ?>>JPEG</option>
                        <option value="jpg" <?= ($selected_val == 'jpg' ? 'selected' : '') ?>>JPG</option>
                        <option value="png" <?= ($selected_val == 'png' ? 'selected' : '') ?>>PNG</option>
                        <option value="gif" <?= ($selected_val == 'gif' ? 'selected' : '') ?>>GIF</option>
                        <option value="svg" <?= ($selected_val == 'svg' ? 'selected' : '') ?>>SVG</option>
                    </select>
                </div>



                <?php
                $selected_val = '';
                if (isset($optional_value) && !empty($optional_value)) {
                    $selected_val = $optional_value;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="optional_value">Optional Value</label>
                    <input type="text" name="optional_value" class="form-control" id="optional_value" placeholder="optional value" value="<?=$selected_val?>"/>
                </div>



                <?php /*
                $selected_val = '';
                if (isset($name) && !empty($name)) {
                    $selected_val = $name;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" value="<?=$selected_val?>"/>
                </div>
                <?php
                */
                ?>




                <?php
                $selected_val = '';
                if (isset($display_name) && !empty($display_name)) {
                    $selected_val = $display_name;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="display_name">Display Name</label>
                    <input type="text" name="display_name" class="form-control" id="display_name" placeholder="display name" value="<?=$selected_val?>"/>
                </div>



                <?php
                $selected_val = '';
                if (isset($alt) && !empty($alt)) {
                    $selected_val = $alt;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="alt">Alt Name</label>
                    <input type="text" name="alt" class="form-control" id="alt" placeholder="alt" value="<?=$selected_val?>"/>
                </div>





                <?php
                $selected_val = '';
                if (isset($status) && !empty($status)) {
                    $selected_val = $status;
                }elseif($action=='edit' && $status=='0'){
                    $selected_val='0';
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select id="status" class="form-control" name="status">
                        <option value="" >--select status--</option>
                        <option value="0" <?= ($selected_val == '0' ? 'selected' : '') ?>>InActive</option>
                        <option value="1" <?= ($selected_val == '1' ? 'selected' : '') ?>>Active</option>
                    </select>
                </div>



                <?php
                $selected_val = '';
                if (isset($alt) && !empty($alt)) {
                    $selected_val = $alt;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="file">File Choose</label>
                    <input type="file" name="file" class="form-control" id="file" placeholder="file" value="<?=$selected_val?>"/>
                </div>




            </div>
            
            <?php
            $btn_name = $action=='add'?$action:'save';
            ?>
            <input type="hidden" name="action" value="<?=$action?>" />
            <div class="form-group col-md-12 mt-2">
                <button type="submit" class="me-2 <?= $action ?>-ae-<?= $formname ?>-form btn btn-primary"><?= ucwords($btn_name)." Media" ?></button>
            </div>
        </form>
    </div>
</div>