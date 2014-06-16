$(document).ready( function() {

	// Beautifying the contact form with color changes and clearing default values on click
	$("input:text, textarea").each(function () {
	
		// Store default value
		var v = this.value;

		$(this).blur(function () {
			// If input is empty, reset value to default 
			if (this.value.length == 0) { this.value = v; $(this).removeClass('input-selected'); }
		}).focus(function () {
			// If value is no longer the default, when input is focused, clear its contents
			if (this.value == v) { this.value = ""; $(this).addClass('input-selected'); }
		}); 
		
	});
	
	// Homepage animation, to trigger on desktop windows and if gif is not cached
	
	//var imgTimer;
	//imgTimer = window.setTimeout(function() {}, 50);
	
	//$(".home-gif").load(function() {
	//	window.clearTimeout(imgTimer);
	//}
	
	var windowWidth = $(window).width();
	if ( windowWidth > 974 && $('.animation-row').length > 0 ) {
	
		$('.animation-row').fadeIn(1000);
		$('.homepage-content, .home-gif-overlay').css({
		  opacity: "0",
		  filter: "alpha(opacity=0)",
		  visibility: "hidden"
		});
	
		$('.home-gif-wrap').css("overflow", "visible").animate({
		  "z-index": "8888"
		}, 4000, function() {
			$('.animation-row').fadeOut(500, function() {
				$('.homepage-content, .home-gif-overlay').css("visibility", "visible").animate({
				  opacity: "1",
				  filter: "alpha(opacity=100)"
				}, 500);
			});
		});
		
	}

});