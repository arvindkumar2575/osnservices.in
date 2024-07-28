

<?= $this->extend(OSN_VIEW_V2.'/layout/page-layout') ?>


<?= $this->section("content") ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?= base_url('assets/images/click-generator.png') ?>" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">The Click Generator</h4>
                        <p>It is a way to generate traffic on website via email </p>
                        <a class="fw-medium" href="https://warriorplus.com/o2/a/q3b4wcn/0">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?= base_url('assets/images/webx.png') ?>" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">WebX</h4>
                        <p>Create Any Website & Website Funnel for Traffic booster.</p>
                        <a class="fw-medium" href="https://warriorplus.com/o2/a/zjx840m/0">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container contact-link">
    <p>If you want to inquire our service the same, feel free to <a href="<?= base_url('contact-us?q=digital-marketing') ?>">ping here</a></p>
</div>


<?= $this->endSection("content") ?>