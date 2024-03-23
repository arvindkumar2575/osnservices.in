

<?= $this->extend(OSN_VIEW_V2.'/pages-layout') ?>


<?= $this->section("content") ?>

<div class="main container">
    <div class="main-heading">
        <h2 class="primary-color">GST Registration by OSN</h2>
    </div>
    <div class="main-description">
        <p>There are various benefits you will take if you file your GST Registration with us.</p>
        <p>Some of them are listed below:-</p>
        <ul>
            <li>SMS updates at regular at deadline meeting.</li>
            <li>Provide support in your money management.</li>
            <li>Inform you about new changes, if any.</li>
        </ul>
        <h6>Benefits of GST Registration</h6>
        <ul>
            <li>Leverage nationwide market access</li>
            <li>Compliance with tax laws</li>
            <li>Legal compliance for business</li>
            <li>Input tax credit</li>
            <li>Peace of mind</li>
        </ul>
    </div>
    <div class="contact-link">
        <p>If you want to inquire our service the same, feel free to <a href="<?= base_url('contact-us?q=gst-registration') ?>">ping here</a></p>
    </div>
</div>

<?= $this->endSection("content") ?>