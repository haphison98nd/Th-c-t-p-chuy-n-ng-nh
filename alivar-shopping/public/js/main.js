$(document).ready(function(){
	$('.banner-slide').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		smartSpeed: 800,
		dots: true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$(".cover").height($(".cover").first().width() * 0.5);
	window.addEventListener("orientationchange", function() {
		setTimeout(function() {
			$(".cover").height($(".cover").first().width() * 0.5);
		}, 500);
		
	});
});