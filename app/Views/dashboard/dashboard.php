<?php

// echo "<pre>";print_r($leads);die;

?>

<?= $this->extend(DASHBOARD_VIEW.'/layouts/dashboard') ?>

<?= $this->section("content") ?>


<div class="container-fluid px-4">
    <h1 class="mt-3">Dashboard</h1>
    
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span>
                <i class="fas fa-table me-1"></i>
                Leads
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
                        <th>S.No.</th>
                        <th>Lead Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Add At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($leads as $key => $value) {
                        ?>
                        
                        <tr data-lead_id="<?=$value['id']?>">
                            <td><?=$i?></td>
                            <td><?=$value['id']?></td>
                            <td><?=$value['first_name']." ".$value['last_name']?></td>
                            <td><?=$value['email_id']?></td>
                            <td><?=$value['mobile_no']?></td>
                            <td><?=$value['reason_options']?></td>
                            <td>
                                <?=$value['updated_at']?>
                                <span class="me-2 lead-btn-edit" type="button" data-formname="lead" data-action="edit" data-attr_id="<?=$value['id']?>"><i class="fas fa-edit green-color"></i></span>
                                <span class="me-2 lead-btn-delete" role="button" data-formname="lead" data-action="delete" data-attr_id="<?=$value['id']?>"><i class="fas fa-solid fa-trash red-color"></i></span>
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
        <div class="card-body text-center">There is no leads.</div>
        <?php
        }
        ?>
    </div>
</div>

<?= $this->endSection() ?>

