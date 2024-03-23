<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Uttam Nagar, New Delhi</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Delhi, India - 110059</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+91 882 625 3640">+91 882 625 3640</a></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:info@osnservices.in">info@osnservices.in</a></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn btn-link" href="<?= base_url("services/income-tax-return") ?>">ITR Filing</a>
                <a class="btn btn-link" href="<?= base_url("services/dashboard") ?>">Dashboard Designing</a>
                <a class="btn btn-link" href="<?= base_url("services/website-development") ?>">Web Development</a>
                <a class="btn btn-link" href="<?= base_url("services/digital-marketing") ?>">Digital Marketing</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="<?= base_url("/about-us") ?>">About Us</a>
                <a class="btn btn-link" href="<?= base_url("/contact-us") ?>">Contact Us</a>
                <a class="btn btn-link" href="<?= base_url("/services") ?>">Our Services</a>
                <?php /*<a class="btn btn-link" href="<?= base_url("/terms-and-condition") ?>">Terms & Condition</a>*/ ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <p>Get the latest updates.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                <form class="news-subscribe" method="post">
                    <input class="form-control border-1 w-100 py-3 ps-4 pe-5 cf-field" name="email" type="text" placeholder="Your email">
                    <button type="submit" class="newsletter-btn btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2015-2024 <a class="border-bottom" href="<?= base_url("/") ?>">OSN Services</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Design by <a design-by="Arvind Kumar(arvindkumar2575@gmai.com)" class="border-bottom" href="<?= base_url("/") ?>">OSN Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
