jQuery(document).ready(function($){

	$('#menu-nav').toggle(function() {
	  $('.nav-colapse').animate({ right:0 }, 300, 'swing');
	},function(){
	  $('.nav-colapse').animate({
			right:'-300px'
		},300);
	});

});       
