<?php

// echo "<pre>";print_r($leads);die;

?>

<?= $this->extend(DASHBOARD_VIEW.'/layouts/dashboard') ?>

<?= $this->section("content") ?>


<div class="container-fluid px-4 admin-page">
    <h1 class="mt-3">Admin</h1>
    
    <div class="row">
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body bg-grey">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text"><?=$userCounts?> users are generate in website.</p>
                    <a href="<?=base_url("admin/users")?>" class="btn btn-primary">Click to view</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body bg-grey">
                    <h5 class="card-title">Pages</h5>
                    <p class="card-text"><?=$pageCounts?> pages are in website.</p>
                    <a href="<?=base_url("admin/pages")?>" class="btn btn-primary">Click to view</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body bg-grey">
                    <h5 class="card-title">Media</h5>
                    <p class="card-text"><?=$mediaCounts?> media are in website.</p>
                    <a href="<?=base_url("admin/media")?>" class="btn btn-primary">Click to view</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body bg-grey">
                    <h5 class="card-title">Components</h5>
                    <p class="card-text"><?=$mediaCounts?> components are in website.</p>
                    <a href="<?=base_url("admin/components")?>" class="btn btn-primary">Click to view</a>
                </div>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection() ?>

