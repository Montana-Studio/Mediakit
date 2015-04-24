function swipe(){
	window.mySwipe = $('#slider').Swipe({
		speed:1000,
		auto: 3000,
		continuous: true,
		disableScroll: true,
		stopPropagation: true,
		callback: function(index, element) {},
		transitionEnd: function(index, element) {}
	}).data('Swipe');
}
jQuery(document).ready(function($){
	swipe();
	 $(window).load(function(){

	 	var $container = $('#container');
		// initialize
		$container.masonry({
		 	columnWidth: '.item-principal',
		  	itemSelector: '.item-principal'
		});

	 });
});

