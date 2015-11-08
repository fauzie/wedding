Pace.on('done', function() {
	window.scrollTo(0,0);
	document.getElementById('preloader').style.display = 'none';
	window.sr = new scrollReveal({ mobile:false });
});

jQuery(document).ready(function($) {
	
	var $headers = $('header#header'),
		$headrsr = $('#header a.logo'),
		$menutop = $('a#trigger'),
		$content = $('#content'),
		isMobile = ( $(window).width() <= 768 ) ? true : false;
		
    $('select').selectpicker();
	
	if ( !isMobile ){
	
		$('.menu-link').bigSlide({ 
			easyClose: true,
			afterOpen: function() {
				$('#ofcanvas').removeClass('hide');
			},
			afterClose: function() {
				$('#ofcanvas').addClass('hide');
			}
		});
	
		$headers.parallaxScroll({
	      friction: 0.6
	    });
	}
	
	function logoAnimate( num ) {
		var $this = $('#header a.logo');
		$this.css('padding-top', num);
	}
    
    if ( isMobile ) {
    	$menutop.on('click', function(e) {
	    	e.preventDefault();
	    	$(this).toggleClass('active');
	    });
    }
    
    scrolled = function( event ) {
    	var scroll = $content.offset().top - $(window).scrollTop();
			
		//console.log( 'header :' + scroll + 'px' );
			
		if ( scroll < 85 ) {
			$headers.addClass('staywithme');
			$('body').addClass('scrolled');
		} else {
			$headers.removeClass('staywithme');
			$('body').removeClass('scrolled');
		}
		
		if ( $headers.hasClass('staywithme') ) {
			$headrsr.bind('click', function( event ) {
				event.preventDefault();
				$('html, body').stop().animate({
		            scrollTop: $('body').offset().top
		        }, 1500, 'easeInOutExpo');
			})
		} else {
			$headrsr.unbind('click');
		}
    };
	$(window).scroll( scrolled );
	$content.css( 'margin-top', $headers.height() );
});
