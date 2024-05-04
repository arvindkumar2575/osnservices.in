<?= $this->extend(OSN_VIEW_V2 . '/layout/page-layout') ?>


<?= $this->section("content") ?>


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-user-check fa-2x text-primary"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">01</h1>
                </div>
                <h5>Creative Designers</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-check fa-2x text-primary"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">02</h1>
                </div>
                <h5>Quality Products</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">03</h1>
                </div>
                <h5>Free Consultation</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-headphones fa-2x text-primary"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">04</h1>
                </div>
                <h5>Customer Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->



<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('assets/images/business-model3.jpg') ?>" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">About Us</h1>
                    </div>
                    <p class="mb-4 pb-2">We specialize in helping businesses achieve their digital goals and elevate their brand to success. Our team comprises highly experienced and dynamic professionals who deeply understand your business needs. Based on this understanding, we create customized digital marketing strategies that align with your unique requirements. Our approach focuses on building a strong online presence through practical and achievable strategies, enabling your business to thrive and expand.</p>
                    <div class="row g-4 mb-4 pb-2">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-users fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-1" data-toggle="counter-up">78</h2>
                                    <p class="fw-medium mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-1" data-toggle="counter-up">18</h2>
                                    <p class="fw-medium mb-0">Projects Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('services') ?>" class="btn btn-primary py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="<?= base_url('assets/images/team2.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Mr. Ravi Kumar</h5>
                        <small>Data Analyst</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="<?= base_url('assets/images/team4.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Mr. Arvind Kumar</h5>
                        <small>Senior Developer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="<?= base_url('assets/images/team1.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Mr. Sunil Kumar</h5>
                        <small>SEO Expert</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="<?= base_url('assets/images/team3.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Mr. Rohit Sharma</h5>
                        <small>Digital Marketing Expert</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<?= $this->endSection("content") ?>