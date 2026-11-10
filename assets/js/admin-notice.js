/**
 * Ink St — remember that the welcome notice was dismissed.
 */
( function () {
	var notice = document.getElementById( 'ink-st-notice' );
	if ( ! notice || ! window.inkStNotice ) {
		return;
	}
	notice.addEventListener( 'click', function ( event ) {
		if ( ! event.target.closest( '.notice-dismiss' ) ) {
			return;
		}
		var body = new URLSearchParams();
		body.append( 'action', 'ink_st_dismiss_notice' );
		body.append( 'nonce', window.inkStNotice.nonce );
		window.fetch( window.inkStNotice.ajaxUrl, { method: 'POST', credentials: 'same-origin', body: body } );
	} );
}() );
