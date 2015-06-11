/**
 * Twenty Fourteen keyboard support for image navigation.
 */
( function( $ ) {
	$( document ).on( 'keydown.twentyfourteen', function( e ) {
		var url = false;

		// Left arrow key code.
		if ( e.which === 37 ) {
			url = $( '.previous-image a' ).attr( 'href' );

		// Right arrow key code.
		} else if ( e.which === 39 ) {
			url = $( '.entry-attachment a' ).attr( 'href' );
		}

<<<<<<< HEAD
		if ( url && ( ! $( 'textarea, input' ).is( ':focus' ) ) ) {
=======
		if ( url && ( !$( 'textarea, input' ).is( ':focus' ) ) ) {
>>>>>>> f8417fafd5bf20d329bf2e3402fca16fd839cf1f
			window.location = url;
		}
	} );
} )( jQuery );