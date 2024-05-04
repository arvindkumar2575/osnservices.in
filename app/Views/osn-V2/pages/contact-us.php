<?= $this->extend(OSN_VIEW_V2 . '/layout/page-layout') ?>


<?= $this->section("content") ?>

<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Contact Us</h1>
                    </div>
                    <p class="mb-4">Fill the below forms as per your reason of contact.</p>
                    <form class="contact-form" method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control cf-field" name="first_name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control cf-field" name="mobile_no" id="phone" placeholder="Your Phone No.">
                                    <label for="phone">Your Phone No*</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control cf-field" name="email_id" id="email" placeholder="Your Email">
                                    <label for="email">Your Email*</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-control cf-field" name="reason_options" id="option-1">
                                        <option value="New Customer">New Customer</option>
                                        <option value="ITR Filing">ITR Filing</option>
                                        <option value="Accounting Query">Accounting Query</option>
                                        <option value="Dashboard Query">Dashboard Query</option>
                                        <option value="GST Registration Query">GST Registration Query</option>
                                        <option value="Information regarding ITR">Information regarding ITR</option>
                                        <option value="Referral">Referral</option>
                                    </select>
                                    <label for="subject">Subject*</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control cf-field" name="default_message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7004.782858767883!2d77.03578198862252!3d28.618028402690275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d053a75d1db1f%3A0x9d0af3bff214b36e!2sBlock%20D%2C%20Mansa%20Ram%20Park%2C%20Uttam%20Nagar%2C%20Delhi!5e0!3m2!1sen!2sin!4v1710611944632!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?= $this->endSection("content") ?>