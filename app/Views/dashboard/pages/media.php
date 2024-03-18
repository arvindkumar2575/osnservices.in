<?php

// echo "<pre>";print_r($page);die;

?>

<?= $this->extend(DASHBOARD_VIEW.'/layouts/dashboard') ?>

<?= $this->section("content") ?>


<div class="container-fluid px-4 media-page">
    <h1 class="mt-3">Admin</h1>
    
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span>
                <i class="fas fa-table me-1"></i>
                Media
            </span>
            <span class="right">
                <span class="media-btn-add" type="button" data-formname="media" data-action="add"><i class="fas fa-plus-square blue-color"></i> New Media</span>
            </span>
        </div>
        <?php
        if(isset($media) && count($media)>0){
        ?>
        <div class="card-body lead-table-div">
            <table id="media-table">
                <thead>
                    <tr>
                        <th width="50">S.No.</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>View</th>
                        <th width="100">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($media as $key => $value) {
                        ?>
                    <tr class="<?= $value['status']==1?'':'row-inactive' ?>"  data-attr_id="<?=$value['id']?>">
                        <td><?=$i?></td>
                        <td><?=$value['type']?></td>
                        <td><?=$value['display_name']." (".$value['name'].")"?></td>
                        <td><img height="100" width="auto" src="<?=base_url($value['url'])?>" /></td>
                        <td>
                            <span class="me-2 media-btn-edit" type="button" data-formname="media" data-action="edit" data-attr_id="<?=$value['id']?>"><i class="fas fa-edit green-color"></i></span>
                            <span class="me-2 media-btn-delete" role="button" data-formname="media" data-action="delete" data-attr_id="<?=$value['id']?>"><i class="fas fa-solid fa-trash red-color"></i></span>
                        </td>
                    </tr>
                    <?php
                        $i++;
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <?php
        }else{
        ?>
        <div class="card-body text-center">There is no media setup.</div>
        <?php
        }
        ?>
    </div>
</div>

<?= $this->endSection() ?>

