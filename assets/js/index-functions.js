/* trigger when page is ready */
$(function(){
	$('.main_nav__hamb-link').on('click', function(event) {
		event.preventDefault();
		$('.main_nav__elements').toggleClass('show');
	});
	$('#main_skills__bar-html').LineProgressbar({
	percentage: 85,
	fillBackgroundColor: '#F11574'
	});
	$('#main_skills__bar-css').LineProgressbar({
	percentage: 75,
	fillBackgroundColor: '#F11574'
	});
	$('#main_skills__bar-js').LineProgressbar({
	percentage: 60,
	fillBackgroundColor: '#F11574'
	});
	$('#main_skills__bar-ps').LineProgressbar({
	percentage: 75,
	fillBackgroundColor: '#F11574'
	});
	$('#main_skills__bar-ai').LineProgressbar({
	percentage: 85,
	fillBackgroundColor: '#F11574'
	});
	$('#main_skills__bar-ae').LineProgressbar({
	percentage: 60,
	fillBackgroundColor: '#F11574'
	});
	  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132815296-1');
})
