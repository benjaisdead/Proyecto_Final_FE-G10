/* trigger when page is ready */
$(function(){
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
	$('.bxslider-1').bxSlider({
	  auto: true,
	  pager: true,
	  randomStart: true,
		slideWidth: 600
	});
	$('.bxslider-2').bxSlider({
		auto: true,
		pager: true,
		randomStart: true,
		slideWidth: 600
	});
	$('.bxslider-3').bxSlider({
		auto: true,
		pager: true,
		randomStart: true,
		slideWidth: 600
	});
})
