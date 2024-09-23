jQuery(document).ready(function($) {
		bbox = $('.blurImageContainer .headerimage').height();
		obox = $('.headerimagetyleE .headerimage').height();
		hbox = $('.headerimagetyleH .headerimage').height();
		$('.blur').css("height", bbox);
		$('.headerimagetyleE .overlayHeaderImage').css("height", obox);
		$('.headerimagetyleH .overlayHeaderImage').css("height", hbox);
			
		$( window ).on( "resize", function() {
			bbox = $('.blurImageContainer .headerimage').height();
			obox = $('.headerimagetyleE .headerimage').height();
			hbox = $('.headerimagetyleH .headerimage').height();
			$('.blur').css("height", bbox);
			$('.headerimagetyleE .overlayHeaderImage').css("height", obox);
			$('.headerimagetyleH .overlayHeaderImage').css("height", hbox);
		} );  				
});
