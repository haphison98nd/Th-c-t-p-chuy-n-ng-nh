$(".btn-search").click(function() {
    $(".box-search-show").addClass("open");
});
$(".close").click(function() {
    $(".box-search-show").removeClass("open");
});

// creat menu sidebar
$(".menu-bar-lv-1").each(function(){
    $(this).find(".span-lv-1").click(function(){
        $(this).toggleClass('rotate-menu');
        $(this).parent().find(".menu-bar-lv-2").toggle(500);
    });
});
$(".menu-bar-lv-2").each(function(){
    $(this).find(".span-lv-2").click(function(){
        $(this).toggleClass('rotate-menu');
        $(this).parent().find(".menu-bar-lv-3").toggle(500);
    });
});
$(".shadow-open-menu").click(function() {
    $('.menu-bar-mobile').fadeOut();
    $(".shadow-open-menu").fadeOut();
    $(".iconmenu").toggleClass("open");
    $(".hide-mobile-check").removeClass('show');
});
$(".iconmenu").click(function() {
    $(this).toggleClass("open");
    $('.menu-bar-mobile').fadeToggle(500);
    $(".shadow-open-menu").fadeToggle(500);
});
$(".item-faq").each(function(){
    $(this).find(".title").click(function(){
        $('.item-faq .content').hide();
        $('.item-faq .title').removeClass('active');
        $(this).addClass('active');
        $(this).next().show(500);
    });
});
$(document).ready(function(){
    $('.logo-footer').click(function(event){
        $('html, body').animate({
            scrollTop: $('body').offset().top - 10
        }, 500);
    });

    if ($(window).width() < 992 ) {
        $('.main-menu ul li').find('.span-lv-1').click(function(){
            if ($('.main-menu > ul > li').hasClass('active')) {
                $('.main-menu ul li').removeClass('active');
            } else{
                $('.main-menu ul li').removeClass('active');
                $(this).parent().toggleClass('active')
            }
            
        });
        $('.main-menu ul li').find('.span-lv-2').click(function(){
            if ($('.main-menu > ul > li > ul > li').hasClass('active')) {
                $('.main-menu > ul > li > ul > li').removeClass('active');
            } else{
                $('.main-menu > ul > li > ul > li').removeClass('active');
                $(this).parent().toggleClass('active')
            }
            
        });
    }
    var myScrollFunc = function () {
        var y = window.scrollY;
        if (y > 30) {
            $('.header').addClass('fixed-header');
        } else {
            $('.header').removeClass('fixed-header');
        };
    };
    window.addEventListener("scroll", myScrollFunc);

    $('.tab-detail-product ul li a').click(function() {
        var getTabId = $(this).attr('id');
        $('.tab-detail-product ul li a,.tab-detail-product ul li').removeClass('active');
        $(this).addClass('active');
        $(this).parent().addClass('active');
        $('.tab-read').slideUp();
        $('.tab-read-' + getTabId).slideDown();

    });
});



function font_size_width_destop() {
    var width = window.innerWidth
    var font_size_html = width/1920*10;
    $('html').css({
        'font-size': font_size_html,
    });
}

$(window).resize(function(){
    if ($(window).width() >= 1000 ) {
        font_size_width_destop();
    }

});

if ($(window).width() >= 1000 ) {
    font_size_width_destop();
}

$(document).click(function (e) {
    if (!$(e.target).hasClass(".count-people") 
        && $(e.target).parents(".count-people").length === 0) 
    {
        $(".box-check-people").removeClass('open');
    }
});

//banner
$(document).ready(function(){
    $(".banner-slider-index").owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots: true,
        items: 1,
    });
});

// popup-trang chu
$(document).ready(function(){
    $("#bt_login").click(function(){
        $(".popup").toggleClass("active");
        return false;
    });
    $(".popup .close-popup").click(function(){
        $(".popup").toggleClass("active");
    });
});

// fancybox gioithieu
$(document).ready(function() {
    $('.fancybox').fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        opacity: '0.5',
    });
});

// form-book-ticket page list-event
$(document).ready(function(){
    //click đặt vé ngay sẽ hiện form
    $("#booking-ticket-now").click(function() {
        $('.form-book-popup.step1').css('display', 'block');
        $(".shadow-open").fadeIn();
    });
    //icon x to close form
    $('#icon-close-form-book').click(function(){
        $('.form-book-popup').css('display', 'none');
        $(".shadow-open").fadeOut();
    });
    //khi click đặt vé thì nhảy sang bước 2
    $('#booking-step2').click(function(){
        $('.form-book-popup').css('display', 'none');
        $('.popup-payment').css('display', 'block');
        $(".shadow-open").fadeIn();
        return false;
    });
    //khi click thanh toan thì nhảy sang bước 3
    $('#booking-step3').click(function(){
        $('.form-book-popup').css('display', 'none');
        $('.popup-payment').css('display', 'none');
        $('.notification-ticket').css('display', 'block');
        $(".shadow-open").fadeIn();
        return false;
    });
    $(".shadow-open").click(function(){
        $('.form-book-popup').css('display', 'none');
        $('.popup-payment').css('display', 'none');
        $('.notification-ticket').css('display', 'none');
        $(".shadow-open").fadeOut();
    });

});

//tab in popup-login
$(document).ready(function()
{
    // Hàm active tab nào đó
    function activeTab(obj)
    {
        // Xóa class active tất cả các tab
        $('.tab-wrapper ul li').removeClass('active');

        // Thêm class active vòa tab đang click
        $(obj).addClass('active');

        // Lấy href của tab để show content tương ứng
        var id = $(obj).find('a').attr('href');

        // Ẩn hết nội dung các tab đang hiển thị
        $('.tab-item').hide();

        // Hiển thị nội dung của tab hiện tại
        $(id) .show();
    }

    // Sự kiện click đổi tab
    $('.tab li').click(function(){
        activeTab(this);
        return false;
    });

    // Active tab đầu tiên khi trang web được chạy
    activeTab($('.tab li:first-child'));
});

//show hide popup-login
$(document).ready(function(){
    $("#form-login-signup").click(function() {
        $('.popup-login').css('display', 'block');
        $(".shadow-open-menu").fadeIn();
    });
    $(".shadow-open-menu").click(function(){
        $(".shadow-open-menu").fadeOut();
        $('.popup-login').css('display', 'none');
    });
});

//forget password

$(document).ready(function(){
    $(".form-forget-pw").click(function() {
        $('.popup-login').css('display', 'none');
        $('.popup-forget-pw').css('display', 'block');
        $(".shadow-open-menu").fadeIn();
    });
    $(".shadow-open-menu").click(function(){
        $(".shadow-open-menu").fadeOut();
        $('.popup-forget-pw').css('display', 'none');
    });
});

//show notification forget pw
$(document).ready(function(){
    $("#send-info-forget-pw").click(function() {
        $('.popup-forget-pw').css('display', 'none');
        $('.notification-forget-pw').css('display', 'block');
        $(".shadow-open-menu").fadeIn();
    });
    $(".shadow-open-menu").click(function(){
        $(".shadow-open-menu").fadeOut();
        $('.notification-forget-pw').css('display', 'none');
    });
});
