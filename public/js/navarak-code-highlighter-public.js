(function( $ ) {
	'use strict';

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

function addToClipboard(codeID){
	var codeElement = document.querySelector("#code-" + codeID + " pre");
    if (codeElement) {
        window.getSelection().removeAllRanges();
        var newRangeHolder = document.createRange();
        newRangeHolder.selectNode(codeElement),
        window.getSelection().addRange(newRangeHolder);
        try {
            document.execCommand("copy") && changeCopyText(codeID)
        } catch (e) {
            console.error(e)
        }
        window.getSelection().removeAllRanges()
    }
}

function changeCopyText(codeID){
	var element = document.getElementById("code-copy-" + codeID );
	element.innerHTML='<i class="fa fa-copy"></i> Copied';
}

