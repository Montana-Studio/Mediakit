( function( $ ){
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '#site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '#site-description' ).text( to );
		} );
	} );
<<<<<<< HEAD

	// Header text color
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '#site-title, #site-title a, #site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '#site-title, #site-title a, #site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
=======
>>>>>>> f8417fafd5bf20d329bf2e3402fca16fd839cf1f
} )( jQuery );