window.mlPushMenu = new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );

Pace.on('done', function() {
	document.getElementById('preloader').style.visibility = 'hidden';
	window.sr = new scrollReveal();
});

jQuery(document).ready(function($) {

    $('select').selectpicker();

	$('#header').parallaxScroll({
      friction: 0.4
    });

	$('a.hash').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

	var menutop = $('.menu-top');
	var headerh = $('#header').height();
	var metopfn = function() {
		if ( $(menutop).offset().top > headerh )
			$(menutop).addClass('staywithme');
		else
			$(menutop).removeClass('staywithme');
	}
	$(window).scroll( metopfn );
});
