/* trigger when page is ready */
$(function(){
	$('.main_nav__hamb-link').on('click', function(event) {
		event.preventDefault();
		$('.main_nav__elements').toggleClass('show');
	});
	$('.portfolio_home__counter-first').CountUpCircle({
		duration: 2000,
		opacity_anim: false,
		step_divider: 1
	});
  $('.portfolio_home__counter-second').CountUpCircle({
    duration: 2000,
    opacity_anim: false,
    step_divider: 1
  });
	$('.flexslider').flexslider({
    animation: "slide",
		controlNav: false,
		directionNav: false
  });
	$('.flexslider2').flexslider({
		animation: "slide",
		controlNav: false,
		directionNav: false
	});
	$('.flexslider3').flexslider({
		animation: "slide",
		controlNav: false,
		directionNav: false
	});
})
