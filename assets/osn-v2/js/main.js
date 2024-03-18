(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        top: -150,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });





    $(".news-subscribe").on("submit", function (e) {
        e.preventDefault();
        let data = {}
        data.email = $(this).find("input[name=email]").val();
        if(validate(this,"ns")){
            common.ajaxCall(BASE_URL + 'api/newsSubscribe', 'POST', data, (res) => {
                if (res.status) {
                    $('.short-popup-msg').find('.popup-desc').html(res.message)
                    $('.short-popup-msg').css("display", "block")
                    let e = $('.short-popup-msg').find('.popup-msg-progressbar')
                    common.fillProgress(e)
                    setInterval(() => {
                        window.location.href = CURRENT_URL;
                    }, 2000);
                } else {
                    console.log(res)
                }
            }, (err) => {
                console.log(err)
            })
        }
    })

    let url = window.location.href;
    if (url.indexOf("contact-us") > -1) {
        let urlParams = new URLSearchParams(window.location.search);
        let q = urlParams.has("q") ? urlParams.get("q") : ""
        if (q == "") {
            contactFormSelector();
        } else {
            contactFormSelector(q);
        }
    }

    $(".contact-form").on("submit", function (e) {
        e.preventDefault();
        let formData = new FormData(this)
        if(validate(this,"cf")){
            $.ajax({
                url: BASE_URL + 'api/contactUs',
                type: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                data: formData,
                enctype: 'multipart/form-data',
                success: function (res) {
                    res = JSON.parse(res)
                    console.log(res)
                    if (res.status) {
                        $('.short-popup-msg').find('.popup-desc').html(res.message)
                        $('.short-popup-msg').css("display", "block")
                        let e = $('.short-popup-msg').find('.popup-msg-progressbar')
                        common.fillProgress(e)
                        setInterval(() => {
                            window.location.href = CURRENT_URL;
                        }, 2000);
                    }
                },
                error: function (err) {
                    console.log(err)
                }
            })
        }else{
            return false
        }
    })

    function validate(form,type){
        let error = false
        if(type=="cf"){
            let first_name = $(form).find("input[name=first_name]").val()
            let mobile_no = $(form).find("input[name=mobile_no]").val()
            let email_id = $(form).find("input[name=email_id]").val()
            let reason_options = $(form).find("select[name=reason_options]").val()
            let default_message = $(form).find("textarea[name=default_message]").val()
    
            if(first_name==""){
                $(form).find("input[name=first_name]").addClass("red-border")
                error=true
            }
            if(mobile_no==""){
                $(form).find("input[name=mobile_no]").addClass("red-border")
                error=true
            }
            if(email_id==""){
                $(form).find("input[name=email_id]").addClass("red-border")
                error=true
            }
            if(reason_options==""){
                $(form).find("select[name=reason_options]").addClass("red-border")
                error=true
            }
            if(default_message==""){
                $(form).find("textarea[name=default_message]").addClass("red-border")
                error=true
            }
            
    
        }else if(type=="ns"){
            let email = $(form).find("input[name=email]").val()
            if(email==""){
                $(form).find("input[name=email]").addClass("red-border")
                error=true
            }
        }


        if(error){
            return false
        }else{
            return true
        }
    }

    $(".cf-field").on("keydown",function(e){
        if($(this).hasClass("red-border")){
            console.log($(this).removeClass("red-border"))
        }
    })

    function contactFormSelector(q = null){
        var x = document.getElementById("option-1").value;
        if (q != null && q != "") {
            let select = $('#option-1');
            if (q == "new-customer") {
                select.val("New Customer").change();
            } else if (q == "referral") {
                select.val("Referral").change();
            } else if (q == "itr") {
                select.val("ITR Filing").change();
            } else if (q == "designing") {
                select.val("Designing Query").change();
            } else if (q == "dashboard") {
                select.val("Dashboard Query").change();
            } else if (q == "gst-registration") {
                select.val("GST Registration Query").change();
            } else if (q == "accounting") {
                select.val("Accounting Query").change();
            } else if (q == "info-itr") {
                select.val("Information regarding ITR").change();
            }
        }
    }

})(jQuery);

