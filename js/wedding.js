Pace.on('done', function() {
	document.getElementById('preloader').style.visibility = 'hidden';
	window.sr = new scrollReveal();
});

jQuery(document).ready(function($) {

    $('select').selectpicker();

	$('#header').parallaxScroll({
	  friction: 0.2
	});

	// Highlight the top nav as scrolling occurs
	$('body').scrollspy({
		target: '.navbar-fixed-top'
	});

	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a').click(function() {
		$('.navbar-toggle:visible').click();
	});
});
