

<?= $this->extend(OSN_VIEW_V2.'/pages-layout') ?>


<?= $this->section("content") ?>

<div class="main container">
    <div class="main-heading">
        <h2 class="primary-color">Income Tax Return Filling by OSN</h2>
    </div>
    <div class="main-description">
        <p>There are various benefits you will take if you file your ITR with us.</p>
        <h6>Some of them are listed below:-</h6>
        <ul>
            <li>SMS updates at regular at deadline meeting.</li>
            <li>Provide support in your money management.</li>
            <li>Inform you about new changes, if any.</li>
        </ul>
        <h6>Benefits of ITR filing</h6>
        <ul>
            <li>Compliance with tax laws</li>
            <li>Avoid penalties</li>
            <li>Claiming refunds</li>
            <li>Legal compliance for business</li>
            <li>Peace of mind</li>
        </ul>
    </div>
    <div class="contact-link">
        <p>If you want to inquire our service the same, feel free to <a href="<?= base_url('contact-us?q=itr') ?>">ping here</a></p>
    </div>
</div>

<?= $this->endSection("content") ?>