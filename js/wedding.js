Pace.on('done', function() {
	document.getElementById('preloader').style.visibility = 'hidden';
	window.sr = new scrollReveal();
});

jQuery(document).ready(function($) {

    $('select').selectpicker();

});
