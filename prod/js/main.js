jQuery(document).ready(function($){

	$('#menu-nav').toggle(function() {
	  $('.nav-colapse').animate({ right:0 }, 300, 'swing');
	  $('#uno path').removeAttr('class','uno-b');
	  $('#uno path').attr('class','uno');
	},function(){
	  $('.nav-colapse').animate({
			right:'-300px'
		},300);
	  $('#uno path').removeAttr('class','uno');
	  $('#uno path').attr('class','uno-b');
	});

});       