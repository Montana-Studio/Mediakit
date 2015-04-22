(function( root, $, undefined ) {
	'use strict';

	$(function () {
		// DOM ready, take it away
		window.mySwipe = new Swipe(document.getElementById('slider'), {
		  startSlide: 1,
		  speed: 1000,
		  auto: 3000,
		  continuous: true,
		  disableScroll: false,
		  stopPropagation: false,
		  callback: function(index, elem) {},
		  transitionEnd: function(index, elem) {}
		});
	});

} ( this, jQuery ));