<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="<?= base_url("/") ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">OSN Services</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?= base_url("/") ?>" class="nav-item nav-link  <?= $page == "home" ? "active" : "" ?>">Home</a>
            <a href="<?= base_url("/about-us") ?>" class="nav-item nav-link  <?= $page == "about-us" ? "active" : "" ?>">About</a>
            <a href="<?= base_url("/services") ?>" class="nav-item nav-link  <?= $page == "services" ? "active" : "" ?>">Services</a>
            <a href="<?= base_url("/projects") ?>" class="nav-item nav-link  <?= $page == "projects" ? "active" : "" ?>">Projects</a>
            <?php /*
            <div class="nav-item dropdown">
                <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</span>
                <div class="dropdown-menu fade-up m-0">
                    <a href="<?= base_url("/free-quote") ?>" class="dropdown-item">Free Quote</a>
                    <a href="<?= base_url("/our-team") ?>" class="dropdown-item">Our Team</a>
                    <a href="<?= base_url("/testimonials") ?>" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            */ ?>
            <a href="<?= base_url("/contact-us") ?>" class="nav-item nav-link <?= $page == "contact-us" ? "active" : "" ?>">Contact</a>
        </div>
        <a href="<?= base_url("/login") ?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
            <span>LogIn/SignUp<i class="fa fa-arrow-right ms-3"></i></span>
        </a>
    </div>
</nav>