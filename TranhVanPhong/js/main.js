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
	// var myScrollFunc = function () {
	// 	var y = window.scrollY;
	// 	if (y > 30) {
	// 		$('.header').addClass('fixed-header');
	// 	} else {
	// 		$('.header').removeClass('fixed-header');
	// 	};
	// };
	// window.addEventListener("scroll", myScrollFunc);

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

// carousel feedback
$(document).ready(function(){
	$('.owl-img-feedback').owlCarousel({
		autoplay: false,
		center: true,
		loop: true,
		nav:true,
		navigation: true,
		items:3,	
		mouseDrag: false, 
		touchDrag: false,
		pullDrag: false,
		freeDrag: false,
		navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
	});

	$('.text_').owlCarousel({
		nav: false,
		dots: false, 
		items: 1,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		mouseDrag: false, 
		touchDrag: false,
		pullDrag: false,
		freeDrag: false,
	});

	$('.owl-caption-feedback').owlCarousel({
		nav: false,
		dots: false, 
		items: 1,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		mouseDrag: false, 
		touchDrag: false,
		pullDrag: false,
		freeDrag: false,
	});

	$(".owl-nav").on('click',function(e){
		var nav = $(".feedback-avatar .owl-item.active.center .item-feedback").data('nav');
		$('.owl-caption-feedback').trigger('to.owl.carousel', nav-1);
		$('.owl-img-feedback').trigger('to.owl.carousel', nav-1);
		$('.text_').trigger('to.owl.carousel', nav-1);
	});

	setTimeout(function(){ $( ".load_home" ).remove(); }, 2000);

	$('.gr-customer').masonry({
		// options
		itemSelector: '.grid-item',
		columnWidth: 200
	});

	$('.gr-same-product').owlCarousel({
		loop:true,
	    margin:10,
	    items: 6,
	    responsiveClass:true,
	    nav: true,
	    dots: false,
		navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
	    responsive:{
	        0:{
	            items:1,
	        },
	        600:{
	            items:4,
	        },
	        1000:{
	            items:5,
	        },
	        1200:{
	            items:6,
	        }
	    }
	});
});

//count in detail-product
$(document).ready(function() {
	$('.minus').click(function () {
		var $input = $(this).parent().parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$('.plus').click(function () {
		var $input = $(this).parent().parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
});


// toogle cart fixed-header
$(document).ready(function(){
	$("#addtocart").click(function() {
		$('#cart-fixed').addClass('open-cart-fixed').removeClass('remove-cart-fixed');
		$(".shadow-open-menu").fadeIn();
	});
	$('#icon-close-cart-fixed').click(function(){
		$('#cart-fixed').addClass('remove-cart-fixed').removeClass('open-cart-fixed');
		$(".shadow-open-menu").fadeOut();
	});
});
