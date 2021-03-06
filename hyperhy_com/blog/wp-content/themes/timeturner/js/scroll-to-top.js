/* scroll-to-top.js v1.0 */
jQuery( function () {

	jQuery( 'body' ).prepend( '<div class="scroll-top"></div>');

	var scrollButtonEl = jQuery( '.scroll-top' );

	scrollButtonEl.hide();

	jQuery( window ).scroll( function () {
		if ( jQuery( window ).scrollTop() < 10 ) {
			jQuery( '.scroll-top' ).fadeOut();
		} else {
			jQuery( '.scroll-top' ).fadeIn();
		}
	} );

	scrollButtonEl.click( function () {
		jQuery( "html, body" ).animate( { scrollTop: 0 }, 300 );
		return false;
	} );

} );