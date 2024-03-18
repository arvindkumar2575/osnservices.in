<?php

// echo "<pre>";print_r($leads);die;

?>

<?= $this->extend(DASHBOARD_VIEW.'/layouts/dashboard') ?>

<?= $this->section("content") ?>


<div class="container-fluid px-4 admin-page">
    <h1 class="mt-3">Admin</h1>
    
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span>
                <i class="fas fa-table me-1"></i>
                Settings
            </span>
            <span>
            </span>
        </div>
        <div class="card-body lead-table-div">
            <div>
                <a href="<?=base_url('admin/users')?>">Admin</a>
            </div>
            <div>
                <a href="<?=base_url('admin/pages')?>">Pages</a>
            </div>
            <div>
                <a href="<?=base_url('admin/media')?>">Media</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

