jQuery(document).ready(function($){

	var loadReady = setTimeout(function(){$('.logo-mediatrends').addClass('fadeOutDown');},600);
	
	$(window).load(loadReady,function(){
		//una vez cargado
		setTimeout(function(){
			$('.content-about h2').addClass('fadeOut');
		},400);
		setTimeout(function(){
			$('.content-about .bajada').addClass('fadeOut');
		},800);
		setTimeout(function(){ $('#info-1').addClass('fadeOut'); },1700);
		setTimeout(function(){ $('#info-2').addClass('fadeOut'); },1800);
		setTimeout(function(){ $('#info-3').addClass('fadeOut'); },1900);
		setTimeout(function(){ $('#info-4').addClass('fadeOut'); },2000);
		setTimeout(function(){ $('#fsocial-f').addClass('fadeIn'); },2400);
		setTimeout(function(){ $('#fsocial-t').addClass('fadeIn'); },2600);
		setTimeout(function(){ $('#fsocial-i').addClass('fadeIn'); },2800);
	});
	
	$('#menu-nav').toggle(function() {
	  $('.nav-colapse').animate({ right:0 }, 300, 'swing');
	  $('#uno path').removeAttr('class','uno-b');
	  $('#uno path').attr('class','uno');
	  $('#dos path').removeAttr('class','dos-b');
	  $('#dos path').attr('class','dos');
	  $('#tres path').removeAttr('class','tres-b');
	  $('#tres path').attr('class','tres');
	},function(){
	  $('.nav-colapse').animate({ right:'-300px' },300);
	  $('#uno path').removeAttr('class','uno');
	  $('#uno path').attr('class','uno-b');
	  $('#dos path').removeAttr('class','dos');
	  $('#dos path').attr('class','dos-b');
	  $('#tres path').removeAttr('class','tres');
	  $('#tres path').attr('class','tres-b');
	});

	/* detect touch */
	if('ontouchstart' in window){
	    document.documentElement.className = document.documentElement.className + 'touch';
	}
	if(!$('html').hasClass('touch')){
	    /* background fix */
	    $('.parallax').css('background-attachment', 'fixed');
	}

	/* fix vertical when not overflow
	call fullscreenFix() if .fullscreen content changes */
	function fullscreenFix(){
	    var h = $('body').height();
	    // set .fullscreen height
	    $('.content-b').each(function(i){
	        if($(this).innerHeight() <= h){
	            $(this).closest('.fullscreen').addClass('not-overflow');
	        }
	    });
	}
	$(window).resize(fullscreenFix);
	fullscreenFix();

	/* resize background images */
	function backgroundResize(){
	    var windowH = $(window).height();
	    $('.background').each(function(i){
	        var path = $(this);
	        // variables
	        var contW = path.width();
	        var contH = path.height();
	        var imgW = path.attr('data-img-width');
	        var imgH = path.attr('data-img-height');
	        var ratio = imgW / imgH;
	        // overflowing difference
	        var diff = parseFloat(path.attr('data-diff'));
	        diff = diff ? diff : 0;
	        // remaining height to have fullscreen image only on parallax
	        var remainingH = 0;
	        if(path.hasClass('parallax') && !$('html').hasClass('touch')){
	            var maxH = contH > windowH ? contH : windowH;
	            remainingH = windowH - contH;
	        }
	        // set img values depending on cont
	        imgH = contH + remainingH + diff;
	        imgW = imgH * ratio;
	        // fix when too large
	        if(contW > imgW){
	            imgW = contW;
	            imgH = imgW / ratio;
	        }
	        //
	        path.data('resized-imgW', imgW);
	        path.data('resized-imgH', imgH);
	        path.css('background-size', imgW + 'px ' + imgH + 'px');
	    });
	}
	$(window).resize(backgroundResize);
	$(window).focus(backgroundResize);
	backgroundResize();

	/* set parallax background-position */
	function parallaxPosition(e){
	    var heightWindow = $(window).height();
	    var topWindow = $(window).scrollTop();
	    var bottomWindow = topWindow + heightWindow;
	    var currentWindow = (topWindow + bottomWindow) / 2;
	    $('.parallax').each(function(i){
	        var path = $(this);
	        var height = path.height();
	        var top = path.offset().top;
	        var bottom = top + height;
	        // only when in range
	        if(bottomWindow > top && topWindow < bottom){
	            var imgW = path.data('resized-imgW');
	            var imgH = path.data('resized-imgH');
	            // min when image touch top of window
	            var min = 0;
	            // max when image touch bottom of window
	            var max = - imgH + heightWindow;
	            // overflow changes parallax
	            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
	            top = top - overflowH;
	            bottom = bottom + overflowH;
	            // value with linear interpolation
	            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
	            // set background-position
	            var orizontalPosition = path.attr('data-oriz-pos');
	            orizontalPosition = orizontalPosition ? orizontalPosition : '50%';
	            $(this).css('background-position', orizontalPosition + ' ' + value + 'px');
	        }
	    });
	}
	if(!$('html').hasClass('touch')){
	    $(window).resize(parallaxPosition);
	    //$(window).focus(parallaxPosition);
	    $(window).scroll(parallaxPosition);
	    parallaxPosition();
	}

	$('.fa-line-chart a').attr('class','item item-0');
	$('.fa-paint-brush a').attr('class','item item-1');
	$('.fa-desktop a').attr('class','item item-2');
	$('.fa-star-o a').attr('class','item item-3');
	$('.fa-gamepad a').attr('class','item item-4');
	$('.fa-music a').attr('class','item item-5');
	$('.fa-futbol-o a').attr('class','item item-6');
	$('.fa-trophy a').attr('class','item item-7');
	$('.fa-glass a').attr('class','item item-8');
	$('.fa-envelope-o a').attr('class','item item-9');
	$('.fa-heart a').attr('class','item item-10');

	$('#menu-nav').on('click', function(){
  
		console.log('click'); $('.menu-inner').toggleClass('menu--is-closed');

	});   

	$(function() {
	    function moveFloatMenu() {
	        var menuOffset = $(this).scrollTop() + 'px';
	        $('#floatMenu').animate({
	            top: menuOffset
	        }, {
	            duration: 500,
	            queue: false
	        });
	    }

	    var menuYloc = $('#floatMenu').offset();

	    $(window).scroll(moveFloatMenu);

	    moveFloatMenu();
	});

	

});    



