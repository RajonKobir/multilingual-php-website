$(document).ready(function(){
  	$(".os_section").owlCarousel({
		items: 1,
		autoplay: false,
		//animateIn: 'fadeOut',
		autoplayTimeout: 5000,
		loop: true,
		nav: true,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		dots:false,
		center: true,
		//autoplayHoverPause: true,
	});
});

