<?php

// echo "<pre>";print_r($leads);die;

?>

<?= $this->extend(DASHBOARD_VIEW.'/layouts/dashboard') ?>

<?= $this->section("content") ?>


<div class="container-fluid px-4">
    <h1 class="mt-3">Subscribe</h1>
    
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span>
                <i class="fas fa-table me-1"></i>
                User Subscribe for News on website
            </span>
            <span>
            </span>
        </div>
        <?php
        if(count($leads)>0){
        ?>
        <div class="card-body lead-table-div">
            <table id="lead-table">
                <thead>
                    <tr>
                        <?php /*<th>S.No.</th>*/?>
                        <th>Lead Id</th>
                        <th>Email</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $i = 1;
                    foreach ($leads as $key => $value) {
                        ?>
                        
                        <tr data-lead_id="<?=$value['id']?>">
                            <?php /*<td><?=$i?></td>*/ ?>
                            <td><?=$value['id']?></td>
                            <td><?=$value['email']?></td>
                            <td>
                                <?=$value['updated_at']?>
                                <span class="mx-2 lead-btn-edit" type="button" data-formname="lead" data-action="edit" data-attr_id="<?=$value['id']?>"><i class="fas fa-edit green-color"></i></span>
                                <span class="me-2 lead-btn-delete" role="button" data-formname="lead" data-action="delete" data-attr_id="<?=$value['id']?>"><i class="fas fa-solid fa-trash red-color"></i></span>
                            </td>
                            
                        </tr>

                        <?php
                        // $i++;
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <?php
        }else{
        ?>
        <div class="card-body text-center">There is no leads.</div>
        <?php
        }
        ?>
        
        <div class="bottom-nav d-flex justify-content-between">
            <div class="mx-2">
                <?php 
                /*<span>
                    <select>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                </span>*/?>
            </div>
            <div class="mx-2">
                <?php
                if($pagination["status"]=='1'){
                    if(isset($pagination["links"]["back"]) && !empty($pagination["links"]["back"])){
                    ?>
                        <a class="pagination-anchor-btn" href="<?=$pagination["links"]["back"]?>"><span class="bnav-btn bg-grey"><</span></a>
                    <?php
                    }else{
                    ?>
                        <span class="bnav-btn bg-grey none-anchor"><</span>
                    <?php                        
                    }

                    if(isset($pagination["page"]) && !empty($pagination["page"])){
                    ?>
                        <span class="bnav-btn grey-background"><?=$pagination["page"]?></span>
                    <?php
                    }else{
                    ?>
                        <span class="bnav-btn bg-grey none-anchor">1</span>
                    <?php                        
                    }

                    if(isset($pagination["links"]["next"]) && !empty($pagination["links"]["next"])){
                    ?>
                        <a class="pagination-anchor-btn" href="<?=$pagination["links"]["next"]?>"><span class="bnav-btn bg-grey">></span></a>
                    <?php
                    }else{
                    ?>
                        <span class="bnav-btn bg-grey none-anchor">></span>
                    <?php                        
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

