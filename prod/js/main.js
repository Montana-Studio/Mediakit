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
		setTimeout(function(){ $('#fsocial-f').addClass('fadeIn'); },1700);
		setTimeout(function(){ $('#fsocial-t').addClass('fadeIn'); },1900);
		setTimeout(function(){ $('#fsocial-i').addClass('fadeIn'); },2100);

		setTimeout(function(){ $('.nothing-message h2').addClass('vanishIn'); },600);  
		setTimeout(function(){ $('.nothing-message p').addClass('vanishIn'); },700);  
		setTimeout(function(){ $('.logotipe-message').addClass('vanishIn'); },1200);   
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

	$('#icon-acor1').click(function(){
		$('#content-acor1').slideToggle('slow');
	});
	$('#icon-acor2').click(function(){
		$('#content-acor2').slideToggle('slow');
	});
	$('#icon-acor3').click(function(){
		$('#content-acor3').slideToggle('slow');
	});
	$('#icon-acor4').click(function(){
		$('#content-acor4').slideToggle('slow');
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

	$(window).load(function(){

		$('.login-scroll').mCustomScrollbar({
		    axis:'y', 
		    scrollbarPosition: 'inside',
		    scrollInertia: 0    
		});
		$('.wrapper').mCustomScrollbar(); 
       

       	var classAdd = $('.nav-colapse .contendor-menu .menu ul li:first-child');
       	
       	var classAdd2 = $('.footer-container .content-right .pattern, .search-loop .title-resultado .content-pattern, .page-specs .acordeon .title-acor');

		classAdd.append('<div class="trama"><svg><defs><pattern id="lines-pattern" class="lines-pattern" width="5" height="5" patternUnits="userSpaceOnUse"><polygon class="polyGon" fill="none" points="-71.125,-70.875 -64.04,-70.875 -64.04,-72.968 -74.04,-72.968 -74.04,-62.968 -71.125,-62.968 "/><polygon class="polyGon" points="9.293,10 10,10 10,9.293 "/><polygon class="polyGon" points="9.293,0 0,9.293 0,10 0.707,10 10,0.707 10,0 "/><polygon class="polyGon" points="0,0 0,0.707 0.707,0 "/><polygon class="polyGon" points="4.285,0 0,4.285 0,5.699 5.699,0 "/><polygon class="polyGon" points="4.285,10 5.699,10 10,5.699 10,4.285 "/></pattern></defs><rect class="pattern-apply" fill="url(#lines-pattern)"/></svg></div>');
		
		classAdd2.append('<div class="trama2"><svg><defs><pattern id="lines-pattern" class="lines-pattern" width="5" height="5" patternUnits="userSpaceOnUse"><polygon class="polyGon" fill="none" points="-71.125,-70.875 -64.04,-70.875 -64.04,-72.968 -74.04,-72.968 -74.04,-62.968 -71.125,-62.968 "/><polygon class="polyGon" points="9.293,10 10,10 10,9.293 "/><polygon class="polyGon" points="9.293,0 0,9.293 0,10 0.707,10 10,0.707 10,0 "/><polygon class="polyGon" points="0,0 0,0.707 0.707,0 "/><polygon class="polyGon" points="4.285,0 0,4.285 0,5.699 5.699,0 "/><polygon class="polyGon" points="4.285,10 5.699,10 10,5.699 10,4.285 "/></pattern></defs><rect class="pattern-apply" fill="url(#lines-pattern)"/></svg></div>');
		
		var childDivs = $('.trama svg, .trama2 svg');

		for(var i=0; i<childDivs.length; i++){

			var attrMain = 'id',
				idIncrement = 'pattern-lines-'+i;

		    $(childDivs[i]).attr(attrMain,idIncrement).css({
		    	'width':'100%',
				'position':'absolute',
				'left':0,
				'top':0
		    });
		}

		$('.menu #menu-item-23').on('mouseover', function(e){
			$(this).find('.trama svg').css('fill','#fff');
		}).on('mouseleave', function(){
		   	$(this).find('.trama svg').css('fill','#000');
		});	
	});


    $('.wrapper').mCustomScrollbar({
	    axis:'y', 
	    theme:'minimal-dark',
	    scrollbarPosition: 'inside',
	    scrollInertia: 0    
	});

	$('.nav-colapse .contendor-menu').mCustomScrollbar({
    	scrollInertia:0,
    	theme:'minimal',
    	scrollbarPosition: 'inside'   
    });
 
});      



