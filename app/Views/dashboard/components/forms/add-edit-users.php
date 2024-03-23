<div class="form-wrapper">
    <div class="close">
        <span type="button" class="form-close">
            <i class="fas fa-times-circle blue-color"></i>
        </span>
    </div>
    <div class="add-pages">
        <h3 class="border-bottom"><?= ucwords($action) ?> User</h3>
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
                if (isset($user_type) && !empty($user_type)) {
                    $selected_val = $user_type;
                }elseif($action=='edit' && $verified=='0'){
                    $selected_val='0';
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="user_type">User Type</label>
                    <select id="user_type" class="form-control" name="user_type">
                        <option value="" >--select Type--</option>
                        <option value="0" <?= ($selected_val == '0' ? 'selected' : '') ?>>Not Known</option>
                        <option value="1" <?= ($selected_val == '1' ? 'selected' : '') ?>>Admin</option>
                        <option value="2" <?= ($selected_val == '2' ? 'selected' : '') ?>>User</option>
                    </select>
                </div>



                <?php
                $selected_val = '';
                if (isset($optional_value) && !empty($optional_value)) {
                    $selected_val = $optional_value;
                }
                ?>
                <div class="form-group col-md-6">
                    <!-- <label for="optional_value">Optional Value</label>
                    <input type="text" name="optional_value" class="form-control" id="optional_value" placeholder="optional value" value="<?=$selected_val?>"/> -->
                </div>



                <?php
                $selected_val = '';
                if (isset($first_name) && !empty($first_name)) {
                    $selected_val = $first_name;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" value="<?=$selected_val?>"/>
                </div>
                <?php
                ?>



                <?php
                $selected_val = '';
                if (isset($last_name) && !empty($last_name)) {
                    $selected_val = $last_name;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" value="<?=$selected_val?>"/>
                </div>
                <?php
                ?>




                <?php
                $selected_val = '';
                if (isset($username) && !empty($username)) {
                    $selected_val = $username;
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="username">Email Id</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Email Id" value="<?=$selected_val?>"/>
                </div>



                <?php
                
                $selected_val = '';
                if (isset($password) && !empty($password)) {
                    $selected_val = $password;
                }
                ?>
                <div class="form-group col-md-6">
                    <?php 
                    if($action=="add") { 
                    ?>
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="Password" value="<?=$selected_val?>"/>
                    <?php
                    }
                    ?>
                </div>



                <?php
                $selected_val = '';
                if (isset($verified) && !empty($verified)) {
                    $selected_val = $verified;
                }elseif($action=='edit' && $verified=='0'){
                    $selected_val='0';
                }
                ?>
                <div class="form-group col-md-6">
                    <label for="verified">Verification</label>
                    <select id="verified" class="form-control" name="verified">
                        <option value="" >--select verification options--</option>
                        <option value="0" <?= ($selected_val == '0' ? 'selected' : '') ?>>Not Verify</option>
                        <option value="1" <?= ($selected_val == '1' ? 'selected' : '') ?>>Verified</option>
                    </select>
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
            <input type="hidden" name="action" value="<?=$action?>" />
            <div class="form-group col-md-12 mt-2">
                <button type="submit" class="me-2 <?= $action ?>-ae-<?= $formname ?>-form btn btn-primary"><?= ucwords($btn_name)." Users" ?></button>
            </div>
        </form>
    </div>
</div>