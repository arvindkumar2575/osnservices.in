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
    </div>
</div>

<?= $this->endSection() ?>

