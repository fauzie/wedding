/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() {

	var support = { animations : Modernizr.cssanimations },
		container = document.getElementById( 'page-container' ),
		header = container.querySelector( 'header.preload-header' ),
		loader = new PathLoader( document.getElementById( 'preload-loader-circle' ) ),
		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

	function init() {
		var onEndInitialAnimation = function() {
			if( support.animations ) {
				this.removeEventListener( animEndEventName, onEndInitialAnimation );
			}

			startLoading();
		};

		// disable scrolling
		window.addEventListener( 'scroll', noscroll );

		// initial animation
		classie.add( container, 'loading' );

		if( support.animations ) {
			container.addEventListener( animEndEventName, onEndInitialAnimation );
		}
		else {
			onEndInitialAnimation();
		}
	}

	function startLoading() {

		var loaderFn = function(instance) {

			var progress = Math.min( 0 + Math.random() * 0.1, 1 );

			instance.setProgress( progress );

			// reached the end
			if( progress === true ) {
				classie.remove( container, 'loading' );
				classie.add( container, 'loaded' );

				var onEndHeaderAnimation = function(ev) {
					if( support.animations ) {
						if( ev.target !== header ) return;
						this.removeEventListener( animEndEventName, onEndHeaderAnimation );
					}

					classie.add( document.body, 'layout-switch' );
					window.removeEventListener( 'scroll', noscroll );
				};

				if( support.animations ) {
					header.addEventListener( animEndEventName, onEndHeaderAnimation );
				}
				else {
					onEndHeaderAnimation();
				}
			}
		};

		loader.setProgressFn( loaderFn );
	}

	function noscroll() {
		window.scrollTo( 0, 0 );
	}

	init();

})();
