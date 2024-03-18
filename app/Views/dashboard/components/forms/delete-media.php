<div class="form-wrapper">
    <div class="close">
        <span type="button" class="form-close">
            <i class="fas fa-times-circle blue-color"></i>
        </span>
    </div>
    <div class="add-media">
        <h3 class="border-bottom"><?= ucwords($action) ?> Media</h3>
        <form id="<?= $action ?>-ae-<?= $formname ?>-form" class="container add-form" method="post" data-action="<?= $action ?>" data-formname="<?=$formname?>">
            <div class="row form-fields">

                <?php
                $selected_val = '';
                if (isset($id) && !empty($id)) {
                    $selected_val = $id;
                }
                ?>
                <input type="hidden" name="attr_id" value="<?=$selected_val?>" />

                <h4>Are you sure want to this media?</h4>

            </div>
            
            <?php
            $btn_name = $action=='add'?$action:($action=='delete'?$action:'save');
            ?>
            <input type="hidden" name="action" value="<?=$btn_name?>" />
            <div class="form-group col-md-12 mt-2">
                <button type="submit" class="me-2 <?= $action ?>-ae-<?= $formname ?>-form btn btn-primary"><?= ucwords($btn_name)." Media" ?></button>
            </div>
        </form>
    </div>
</div>