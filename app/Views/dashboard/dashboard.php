<?php

// echo "<pre>";print_r($leads);die;

?>

<?= $this->extend(DASHBOARD_VIEW.'/layouts/dashboard') ?>

<?= $this->section("content") ?>


<div class="container-fluid px-4">
    <h1 class="mt-3">Dashboard</h1>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body bg-grey">
                    <h5 class="card-title">Queries</h5>
                    <p class="card-text"><?=$leadCounts?> leads are generate in website.</p>
                    <a href="<?=base_url("dashboard/queries")?>" class="btn btn-primary">Click to view</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body bg-grey">
                    <h5 class="card-title">Subscribe</h5>
                    <p class="card-text"><?=$userSubscribe?> users are subscribe to news in website.</p>
                    <a href="<?=base_url("dashboard/queries")?>" class="btn btn-primary">Click to view</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>

