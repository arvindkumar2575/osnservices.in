<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="bg-header-carousel-img" src="<?= base_url('/assets/images/intro-bg.jpg') ?>" alt="income-tax-filling" />
            <div class="container">
                <div class="carousel-caption">
                    <h1>OSN SERVICES</h1>
                    <p>Here You Find Easy & Most Trending Digital Services at Affordable Price</p>
                    <p><a class="btn btn-lg btn-primary" href="<?= base_url('contact-us?q=new-customer') ?>">Fill Form</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bg-header-carousel-img" src="<?= base_url('/assets/images/banner-img2.jpg') ?>" alt="income-tax-filling" />
            <div class="container">
                <div class="carousel-caption">
                    <h1>Income Tax Filing</h1>
                    <p>Filing your income tax return with our maximum discounted price</p>
                    <p><a class="btn btn-lg btn-primary" href="<?= base_url('contact-us?q=itr-filing') ?>">ITR Filing</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bg-header-carousel-img" src="<?= base_url('/assets/images/banner-img3.jpg') ?>" alt="income-tax-filling" />
            <div class="container">
                <div class="carousel-caption">
                    <h1>Dashboard Design/Development</h1>
                    <p>Convert your raw/excel/csv data into productive dashboard</p>
                    <p><a class="btn btn-lg btn-primary" href="<?= base_url('contact-us?q=dashboard') ?>">Place order</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>