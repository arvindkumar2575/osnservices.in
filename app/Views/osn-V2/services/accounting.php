

<?= $this->extend(OSN_VIEW_V2.'/layout/page-layout') ?>


<?= $this->section("content") ?>

<div class="main container">
    <div class="main-heading">
        <h2 class="primary-color">Accounting Work by OSN</h2>
    </div>
    <div class="main-description">
        <p>
            We are providing the accounting services in your business
        </p>
    </div>
    <div class="contact-link">
        <p>If you want to inquire our service the same, feel free to <a href="<?= base_url('contact-us?q=accounting') ?>">ping here</a></p>
    </div>
</div>

<?= $this->endSection("content") ?>