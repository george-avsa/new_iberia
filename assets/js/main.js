/*
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$header = $('#header'),
		$banner = $('#banner');

	// Breakpoints.
		breakpoints({
			wide:      [ '1281px',  '1680px' ],
			normal:    [ '981px',   '1280px' ],
			narrow:    [ '841px',   '980px'  ],
			narrower:  [ '737px',   '840px'  ],
			mobile:    [ null,      '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Scrolly.
		$('.scrolly').scrolly({
			speed: 1000,
			offset: function() { return $header.height() + 10; }
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			mode: 'fade',
			noOpenerFade: true,
			expandMode: (browser.mobile ? 'click' : 'hover')
		});

	// Nav Panel.

		// Button.
			$(
				'<div id="navButton" class="on_slide">'  +
					'<a href="#navPanel" class="toggle" > </a>' +
					'<div id="toggle_logo_white" class="toggle_logo toggle_logo_black" >' +
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel" class="navPanel_black">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

		// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
			if (browser.os == 'wp' && browser.osVersion < 10)
				$('#navButton, #navPanel, #page-wrapper')
					.css('transition', 'none');

	// Header.
		if (!browser.mobile
		&&	$header.hasClass('alt')
		&&	$banner.length > 0) {

			$window.on('load', function() {

				$banner.scrollex({
					bottom:		$header.outerHeight(),
					terminate:	function() { $header.removeClass('alt'); },
					enter:		function() { $header.addClass('alt reveal'); },
					leave:		function() { $header.removeClass('alt'); }
				});

			});

		}
		$(window).scroll(function(){
   			 if ($(window).scrollTop() > 100) {
        		$('#navButton').removeClass('on_slide');
   			}
    		 else {
        		$('#navButton').addClass('on_slide')
    		}
		});
		$(window).scroll(function(){
   			 if ($(window).scrollTop() > 100) {
        		$('#toggle_logo_white').removeClass('toggle_logo');
        		$('#toggle_logo_white').addClass('toggle_logo_black');
        		$('#navPanel').removeClass('navPanel_black');
   			}
    		 else {
    		 	$('#toggle_logo_white').removeClass('toggle_logo_black');
        		$('#toggle_logo_white').addClass('toggle_logo');
        		$('#navPanel').addClass('navPanel_black');
    		}
		});

})(jQuery);