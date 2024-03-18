<div class="form-wrapper">
    <div class="close">
        <span type="button" class="form-close">
            <i class="fas fa-times-circle blue-color"></i>
        </span>
    </div>
    <div class="add-pages">
        <h3 class="border-bottom"><?= ucwords($action) ?> Page</h3>
        <form id="<?= $action ?>-ae-<?= $formname ?>-form" class="container add-form" method="post" data-action="<?= $action ?>" data-formname="<?=$formname?>">
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
                if (isset($name) && !empty($name)) {
                    $selected_val = $name;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" value="<?=$selected_val?>"/>
                </div>



                <?php
                $selected_val = '';
                if (isset($slug) && !empty($slug)) {
                    $selected_val = $slug;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="slug">Page Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="slug" value="<?=$selected_val?>"/>
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










            </div>
            
            <?php
            $btn_name = $action=='add'?$action:'save';
            ?>
            <input type="hidden" name="action" value="<?=$btn_name?>" />
            <div class="form-group col-md-12 mt-2">
                <button type="submit" class="me-2 <?= $action ?>-ae-<?= $formname ?>-form btn btn-primary"><?= ucwords($btn_name)." Page" ?></button>
            </div>
        </form>
    </div>
</div>