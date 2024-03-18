let app = {};

let url = window.location.href;


// ready function 
$(document).ready(function () {
    let urlParams = new URLSearchParams(window.location.search)
    let aeform = document.getElementById('ae-form')
    let formDiv = $(".add-edit-form")
    let formDivWrapper = $(".add-edit-form").find(".add-edit-form-wrapper")

    $(".user-login-form,.user-register-form").find("input").click(function (e) {
        if ($(this).hasClass("field-focus-error")) {
            $(this).removeClass("field-focus-error")
        }
    })

    app.fillProgress = common.fillProgress;

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        if (localStorage.getItem('delight-sidebar-toggle') === 'true') {
            document.body.classList.toggle('sb-sidenav-toggled');
        }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('delight-sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

    $("#user-login-form-success").click(function (e) {
        e.preventDefault()
        let data = {};
        // first name 
        let username_elm = $('input[name=username]')
        if (username_elm.val() == "") {
            username_elm.addClass("field-focus-error")
            return false;
        }
        data.username = username_elm.val()

        // last name 
        let password_elm = $('input[name=password]')
        if (password_elm.val() == "") {
            password_elm.addClass("field-focus-error")
            return false;
        }
        data.password = password_elm.val()

        data.form_type = $('input[name=form_type]').val()
        data.request = urlParams.has("request")?urlParams.get("request"):""

        let emailValidator = validation.email(data.username);
        let passwordValidator = validation.password(data.password);

        let requrl = CURRENT_URL

        if (emailValidator == true && passwordValidator == true) {
            common.ajaxCall(requrl, "GET", data, (res) => {
                if (res.status) {
                    $('.short-popup-msg').find('.popup-desc').html(res.message)
                    $('.short-popup-msg').css("display", "block")
                    let e = $('.short-popup-msg').find('.popup-msg-progressbar')
                    app.fillProgress(e)
                    setInterval(() => {
                        window.location.href = BASE_URL + "/dashboard";
                    }, 2000);
                } else {
                    let message = res.message
                    common.popup_error(message)
                }
            }, (err) => {
                console.log(err)
            })
        }else {
            let message = (emailValidator != true) ? emailValidator : passwordValidator
            common.popup_error(message)
        }
    })

    $("#user-register-form-success").click(function (e) {
        e.preventDefault()
        let data = {};
        // first name 
        let first_name_elm = $('input[name=first_name]')
        if (first_name_elm.val() == "") {
            first_name_elm.addClass("field-focus-error")
            return false;
        }
        data.first_name = first_name_elm.val()

        // last name 
        let last_name_elm = $('input[name=last_name]')
        if (last_name_elm.val() == "") {
            last_name_elm.addClass("field-focus-error")
            return false;
        }
        data.last_name = last_name_elm.val()

        let username_elm = $('input[name=username]')
        if (username_elm.val() == "") {
            username_elm.addClass("field-focus-error")
            return false;
        }
        data.username = username_elm.val()

        // last name 
        let password_elm = $('input[name=password]')
        if (password_elm.val() == "") {
            password_elm.addClass("field-focus-error")
            return false;
        }
        data.password = password_elm.val()

        data.form_type = $('input[name=form_type]').val()
        data.request = urlParams.has("request")?urlParams.get("request"):""
        
        // console.log(data)

        let emailValidator = validation.email(data.username);
        let passwordValidator = validation.password(data.password);

        let requrl = CURRENT_URL

        if (emailValidator == true && passwordValidator == true) {
            common.ajaxCall(requrl, "POST", data, (res) => {
                if (res.status) {
                    console.log(res)
                    $('.short-popup-msg').find('.popup-desc').html(res.message)
                    $('.short-popup-msg').css("display", "block")
                    let e = $('.short-popup-msg').find('.popup-msg-progressbar')
                    app.fillProgress(e)
                    setInterval(() => {
                        window.location.href = BASE_URL;
                    }, 2000);
                } else {
                    let message = res.message
                    common.popup_error(message)
                }
            }, (err) => {
                console.log(err)
            })
        }else {
            let message = (emailValidator != true) ? emailValidator : passwordValidator
            common.popup_error(message)
        }
    })

    $(document).on('click','#user-login-btn',function (e) {
        e.preventDefault()
        let req = urlParams.get("request");
        if(req){
            window.location.href=BASE_URL+'/login?request='+req;
        }else{
            window.location.href=BASE_URL+'/login';
        }
    })
    $(document).on('click','#user-register-btn',function (e) {
        e.preventDefault()
        let req = urlParams.get("request");
        if(req){
            window.location.href=BASE_URL+'/register?request='+req;
        }else{
            window.location.href=BASE_URL+'/register';
        }
    })






    // for add icon 
    $(document).on('click','button.admin-btn-add',function(){
        let data = {}
        data.operation = 'add'
        data.type=$(this).data('dl')
        common.ajaxCall(BASE_URL+'/api/fetch-add-edit-form','GET',data,(res)=>{
            if (res.status) {
                $(aeform).html(res.data)
                $(aeform).show()
            }
        },(err)=>{
            console.log(err)
        })
    })

    // for edit icon 
    $(document).on('click','button.admin-btn-edit',function(){
        let data = {}
        data.operation = 'edit'
        data.type=$(this).data('dl')
        let id = $(this).data('id')
        data = idspopulate(data,id)
        // console.log(data)
        common.ajaxCall(BASE_URL+'/api/fetch-add-edit-form','GET',data,(res)=>{
            if (res.status) {
                $(aeform).html(res.data)
                $(aeform).show()
            }
        },(err)=>{
            console.log(err)
        })
    })


    // for delete icon
    $(document).on('click','button.admin-btn-delete',function(){
        let url = BASE_URL+'/api/add-edit-delete'
        let data = {}
        data.operation = 'delete'
        data.type=$(this).data('dl')
        let id = $(this).data('id')
        data = idspopulate(data,id)
        // console.log(data)
        let con = confirm('Are you really want to delete?')
        if(con){
            common.ajaxCall(url,'POST',data,(res)=>{
                if (res.status) {
                    window.location.href = BASE_URL + '/admin'
                }
            },(err)=>{
                console.log(err)
            })
        }
    })
    $(document).on('click','.close-form',function(){
        $(aeform).hide()
    })
    

    // for add/edit form data 
    $(document).on('submit','form#add-edit-form',function(e){
        e.preventDefault()
        let url = BASE_URL+'/api/add-edit-delete'
        let data = {}
        data.type = $(document).find("input[name=type]").val();
        data.operation = $(document).find("input[name=operation]").val();

        let form = $(this)
        data = formDataPopulate(data,form)
        // console.log(data)

        common.ajaxCall(url, "POST", data, (res) => {
            if (res.status) {
                window.location.href = BASE_URL + '/admin'
            }
        }, (err) => {
            console.log(err)
        })
    });

    $(document).on('submit','form#media-add-edit-form',function(e){
        e.preventDefault()
        // let data = {}
        // data.type = $(document).find("input[name=type]").val();
        // data.operation = $(document).find("input[name=operation]").val();

        // data = formDataPopulate(data,form)
        let formData = new FormData(this)
        // console.log(formData)

        $.ajax({
            url: BASE_URL+'/api/add-edit-delete',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            enctype: 'multipart/form-data',
            success: function (res) {
                res = JSON.parse(res)
                if (res.status) {
                    window.location.href = BASE_URL + '/admin'
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
    });

    $(".video-url-link").on("click",function(){
        let video_link = $(this).data('id')
        if(video_link!=undefined && video_link!=null && video_link!=''){
            let url = 'https://www.youtube.com/embed/'
            $('iframe.video-iframe').attr('src',url+video_link)
        }
    })

    // $(document).on('click','.admin-layout .product-row',function(){
    //     console.log($(this).data('course-id'))
    // })



    $(document).on('keyup','input#username',function () {
        if (this.value.length > 2) {
            common.searchNameEmail(this.value)
        } else {
            $('.filter-form .search-list').hide();
            $('.filter-form .search-list').html('')
        }
    })
    $(document).mouseup(function (e) {
        var container = $(document).find("input#name_email");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.filter-form .search-list').hide();
        }
    });

    $(document).on('click', '.search-list .ss-list', function (e) {
        let uid = $(this).data('id')
        let user_name = $(this).find('.user_name').text()
        console.log(uid)
        $('input[name=username]').val(user_name)
        $('input[name=user_id]').val(uid)
    })

    $(document).on('click','#enable_srte-editor',function(){
        $(".srte-editor").summernote()
    })




    
    //######################################################### add pages form  #####################################################

    $(document).on('click','.pages-btn-add, .pages-btn-edit, .pages-btn-delete, .pages-btn-design, .media-btn-add, .media-btn-edit, .media-btn-delete',function(){
        let data = {}
        data.formname = $(this).data('formname')
        data.action = $(this).data('action')
        if(data.action!='add'){
            data.attr_id = $(this).data('attr_id')
        }

        common.ajaxCall(url,'GET',data,(res)=>{
            console.log(res)
            if(res.status){
                formDivWrapper.html(res.html)
                formDiv.show()
            }
        },(err)=>{
            console.log(err)
        })
    })
    $(document).on('click','.form-close',function(){
        formDiv.hide()
    })

    $(document).on("submit","form#add-ae-pages-form, form#edit-ae-pages-form, form#delete-ae-pages-form, form#delete-ae-media-form",function(e){
        e.preventDefault()
        let data = {}
        data.valid = false
        data.formname = $(this).data('formname')
        data.action = $(this).data('action')
        data = dataObjectConversionFromFormData(data,$(this))
        
        if(data.valid){
            common.ajaxCall(url,'POST',data,(res)=>{
                console.log(res)
                if(res.status){
                    window.location.href = url
                }
            },(err)=>{
                console.log(err)
            })
        }
    })





    //############################################################## add pages form ###################################################

    //########################################################### add media ########################################################

    $(document).on('submit','form#add-ae-media-form, form#edit-ae-media-form',function(e){
        e.preventDefault()
        let formData = new FormData(this)
        formData.append("formname",$(this).data('formname'))

        $.ajax({
            url: url,
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            enctype: 'multipart/form-data',
            success: function (res) {
                res = JSON.parse(res)
                if (res.status==true) {
                    window.location.href = url
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
    });

    //########################################################### add media ########################################################
    $(document).on("click",".designs-dropdown",function(){
        $(this).find(".options").toggle()
    })
    $(document).on("click",".designs-items",function(){
        let selected = $(this).text()
        let selectedVal = $(this).attr("value")
        $(".designs-dropdown").find(".selected").html(selected)
        $("input[name=design]").val(selectedVal)
    })
    $(document).on("click",".add-design-btn",function(){
        $(".designs-dropdown").find(".selected").html("--select layout--")
    })
});

function dataObjectConversionFromFormData(data,form){
    switch (data.formname) {
        case "pages":
            if(data.action!="add"){
                data.attr_id = $(form).find("input[name=attr_id]").val()
            }
            data.name = $(form).find("input[name=name]").val()
            data.slug = $(form).find("input[name=slug]").val()
            data.status = $(form).find("select[name=status]").val()
            break;
        case "media":
            if(data.action!="add"){
                data.attr_id = $(form).find("input[name=attr_id]").val()
            }
            break;
    
        default:
            break;
    }
    data.valid=true;
    return data
}




function formDataPopulate(data,form){
    // console.log(data,form)
    switch (data.type) {
        case 'courses':
            if(data.operation=='edit'){
                data.course_id = $(form).find("input[name=course_id]").val()
            }
            data.name = $(form).find("input[name=name]").val()
            data.status = $(form).find("select[name=status]").val()
            data.url = $(form).find("input[name=url]").val()
            data.description = $(form).find("textarea[name=description]").val()
            break;
        case 'plans':
            if(data.operation=='edit'){
                data.plan_id = $(form).find("input[name=plan_id]").val()
            }
            data.name = $(form).find("input[name=name]").val()
            data.status = $(form).find("select[name=status]").val()
            data.price = $(form).find("input[name=price]").val()
            data.discount = $(form).find("input[name=discount]").val()
            data.description = $(form).find("textarea[name=description]").val()
            break;
        
        case 'cpm':
            data.course_id = $(form).find("select[name=course_name]").val()
            data.plan_id = $(form).find("select[name=plan_name]").val()
            break;

        case 'cvm':
            data.course_id = $(form).find("select[name=course_name]").val()
            data.video_id = $(form).find("select[name=video_title]").val()
            break;

        case 'videos':
            if(data.operation=='edit'){
                data.video_id = $(form).find("input[name=video_id]").val()
            }
            data.url = $(form).find("input[name=url]").val()
            data.status = $(form).find("select[name=status]").val()
            data.title = $(form).find("input[name=title]").val()
            data.description = $(form).find("textarea[name=description]").val()
            break;
            
        case 'users':
            if(data.operation=='edit'){
                data.user_id = $(form).find("input[name=user_id]").val()
            }
            data.username = $(form).find("input[name=username]").val()
            data.user_type = $(form).find("input[name=user_type]").val()
            data.first_name = $(form).find("input[name=first_name]").val()
            data.last_name = $(form).find("input[name=last_name]").val()
            data.verified = $(form).find("select[name=verified]").val()
            data.status = $(form).find("select[name=status]").val()
            break;
        case 'ucpm':
            data.ucpm_id = $(form).find("input[name=ucpm_id]").val()
            data.user_id = $(form).find("input[name=user_id]").val()
            data.course_id = $(form).find("select[name=course_name]").val()
            data.plan_id = $(form).find("select[name=plan_name]").val()
            data.status = $(form).find("select[name=status]").val()
            break;
        case 'settings':
            data.s_id = $(form).find("input[name=s_id]").val()
            data.setting_type = $(form).find("input[name=setting_type]").val()
            data.name = $(form).find("input[name=name]").val()
            data.display_name = $(form).find("input[name=display_name]").val()
            data.value = $(form).find("textarea[name=value]").val()
            data.priority = $(form).find("input[name=priority]").val()
            break;
        case 'media':
            data.m_id = $(form).find("input[name=m_id]").val()
            data.media_type = $(form).find("select[name=media_type]").val()
            data.status = $(form).find("select[name=status]").val()
            data.name = $(form).find("input[name=name]").val()
            data.display_name = $(form).find("input[name=display_name]").val()
            data.media_file =  $(form).find('input[name=media_file]')[0].files[0];
            break;
        default:
            break;
    }
    return data
}

function idspopulate(data,ids){
    // console.log(data,ids)
    switch (data.type) {
        case 'courses':
            data.course_id=ids
            break;
        case 'plans':
            data.plan_id=ids
            break;
        
        case 'cpm':
            ids = ids.split(':')
            data.course_id=parseInt(ids[0])
            data.plan_id=parseInt(ids[1])
            break;

        case 'cvm':
            ids = ids.split(':')
            data.course_id=parseInt(ids[0])
            data.video_id=parseInt(ids[1])
            break;

        case 'videos':
            data.video_id=ids
            break;
            
        case 'users':
            data.user_id=ids
            break;
        case 'ucpm':
            ids = ids.split(':')
            data.ucpm_id=parseInt(ids[0])
            data.user_id=parseInt(ids[1])
            data.plan_id=parseInt(ids[2])
            data.course_id=parseInt(ids[3])
            break;
        case 'settings':
            data.s_id=ids
            break;
        case 'media':
            data.m_id=ids
            break;
        default:
            break;
    }
    return data
}


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


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });



    $('.dropdown-sidebar-item').click(function () {
        $(this).addClass("active").siblings().removeClass('active')
        $(this).toggleClass('active').parent().find('.dropdown-sidebar-menu').toggleClass('open')
    })
    $('.dropdown-sidebar-menu-item').click(function () {
        console.log($('.dropdown-sidebar-menu-item'))
        $('.dropdown-sidebar-menu-item').removeClass('active')
        $(this).addClass("active").siblings().removeClass('active')
    })


})(jQuery);


















