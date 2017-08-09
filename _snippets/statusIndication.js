/*  ------------------------------------------
	
	-- Status Indication --
	
	Use this snippet to include status
	indication on your main menu or sub-menu.

    ------------------------------------------ */


// Include these variables and one or both of the functions below
var pathName = window.location.pathname;
var pathArray = pathName.split('/');
var arrayLength = pathArray.length;
var href = pathArray[arrayLength-1];
var directory = pathArray[arrayLength-2];


// Use this for main nav status indication
/*var statusIndication = function() {
	var anchor;
	var anchorArray;
	var lengthArray;
	var folder;
	$('nav ul li a').each(function() {
		anchor = $(this).attr('href');
		anchorArray = anchor.split('/');
		lengthArray = anchorArray.length;
		folder = anchorArray[lengthArray-2];
		if (folder == directory) {
			$(this).addClass('active');
		}
	});
}
statusIndication();*/


// Use this for sub nav status indication
var subNavIndication = function() {
	$('nav ul li a').each(function() {
		var anchor = $(this).attr('href');
		console.log(anchor);
		var anchorArray = anchor.split('/');
		var lengthArray = anchorArray.length;
		var link = anchorArray[lengthArray-1];
		if (link == href) {
			$(this).addClass('active');
		}
	});
}
subNavIndication();