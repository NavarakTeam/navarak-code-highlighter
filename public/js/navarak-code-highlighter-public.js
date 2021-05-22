(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$( window ).load(function() {
		// highligh all code element
		hljs.highlightAll();
	
		// find all hljs code element and copy detected language class to detect-language identifier
		$( ".hljs" ).each(function( index ) {
			var tempClassesSplit = $( this ).attr('class').split(' ');
			var detected_language = tempClassesSplit[tempClassesSplit.length - 1] ;
			$(this).parent().parent().siblings().find("#detect-language").html( detected_language ) ;
			// update header background-color
			var background_color = $( this ).css( "background-color" );
			$(this).parent().parent().prev().css("background-color", background_color);
		});
	});
	

})( jQuery );
