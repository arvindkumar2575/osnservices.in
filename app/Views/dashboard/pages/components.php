<?php

// echo "<pre>";print_r($pages);die;

?>

<?= $this->extend(DASHBOARD_VIEW.'/layouts/dashboard') ?>

<?= $this->section("content") ?>


<div class="container-fluid px-4 pages-page">
    <h1 class="mt-3">Admin</h1>
    
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span>
                <i class="fas fa-table me-1"></i>
                Components
            </span>
            <span class="right">
                <span class="components-btn-add" type="button" data-formname="components" data-action="add"><i class="fas fa-plus-square blue-color"></i> New Component</span>
            </span>
        </div>
        <?php
        if(isset($components) && count($components)>0){
        ?>
        <div class="card-body lead-table-div">
            <table id="pages-table">
                <thead>
                    <tr>
                        <th width="50">S.No.</th>
                        <th>Name</th>
                        <th width="100">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($components as $key => $value) {
                        ?>
                    <tr class="<?= $value['status']==1?'':'row-inactive' ?>" data-attr_id="<?=$value['id']?>">
                        <td><?=$i?></td>
                        <td><?=$value['name']?></td>
                        <td>
                            <span class="me-2 components-btn-edit" type="button" data-formname="components" data-action="edit" data-attr_id="<?=$value['id']?>"><i class="fas fa-edit green-color"></i></span>
                            <span class="me-2 components-btn-delete" role="button" data-formname="components" data-action="delete" data-attr_id="<?=$value['id']?>"><i class="fas fa-solid fa-trash red-color"></i></span>
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
        <div class="card-body text-center">There is no components.</div>
        <?php
        }
        ?>
    </div>
</div>

<?= $this->endSection() ?>

