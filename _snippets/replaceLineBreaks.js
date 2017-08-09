/*  ------------------------------------------
	
	-- Replace Line Breaks --
	
	Use this snippet to replace line breaks
	on centered text with spaces for mobile.

    ------------------------------------------ */


$(window).resize(function() {
	var w = $(window).width();
	if (w < 420) {
		$('.subHeading br').replaceWith('<span class="mobileSpace"> </span>');
	} else {
		$('.subHeading .mobileSpace').replaceWith('<br>');
	}
}).resize();