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
            <div class="nav-item dropdown">
                <span class="nav-link dropdown-toggle <?= str_contains(current_url(),"/services/") ? "active" : "" ?>" data-bs-toggle="dropdown">Services</span>
                <div class="dropdown-menu fade-up m-0">
                    <a href="<?= base_url("services/income-tax-return") ?>" class="dropdown-item <?= $page == "income-tax-return" ? "active" : "" ?>">ITR Filing</a>
                    <a href="<?= base_url("services/web-development") ?>" class="dropdown-item <?= $page == "web-development" ? "active" : "" ?>">Web Development</a>
                    <a href="<?= base_url("services/dashboard") ?>" class="dropdown-item <?= $page == "dashboard" ? "active" : "" ?>">Dashboard</a>
                    <a href="<?= base_url("services/digital-marketing") ?>" class="dropdown-item <?= $page == "digital-marketing" ? "active" : "" ?>">Digital Marketing</a>
                </div>
            </div>
            <a href="<?= base_url("/contact-us") ?>" class="nav-item nav-link <?= $page == "contact-us" ? "active" : "" ?>">Contact</a>
        </div>
        <?php
        if (HEADER_LOGIN_BTN) {
            $session = session();
            $usersession = $session->get('usersession');
            if (isset($usersession['isLoggedIn']) && $usersession['isLoggedIn']) {
                ?>
                <a href="<?= base_url("dashboard") ?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                    <span>Dashboard<i class="fa fa-arrow-right ms-3"></i></span>
                </a>
            <?php
            } else {
            ?>
            <a href="<?= base_url("/login") ?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                <span>LogIn/SignUp<i class="fa fa-arrow-right ms-3"></i></span>
            </a>
            <?php
            }
        }
        ?>
    </div>
</nav>