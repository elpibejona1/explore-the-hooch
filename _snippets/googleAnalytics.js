/*  -----------------------------------------------------------------------
	
	-- Google Analytics --
	
	Use this snippet to track pageviews and clicks throughout the site.
	
	Replace X's with the correct UA code from Google Analytics account.
	
	You must add the class "gaClick" to any link you are tracking.
	
	Example: <a class="gaClick" href="report.pdf">Download PDF</a>

	----------------------------------------------------------------------- */


// Google Analytics

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXXXXX-X', 'auto');
ga('send', 'pageview');


// Use on generic clicks that load content with a hash without
// reloading the page by adding a class of 'gaClick' to the link.
$('.gaClick').on('click', function() {
	var hrefAttr = $(this).attr('href');
	ga('send', 'pageview', hrefAttr);
});

// Use on PDF downloads by adding a class of 'downloadClick' to the link.
$('.downloadClick').on('click', function() {
	var hrefAttr = $(this).attr('href');
	
	// Only use if there is one PDF download for the whole site.
	ga('send', 'pageview', 'click: download - pdf');
	
	// Uncomment this and comment out the line above
	// if there are more than one PDF downloads.
	// ga('send', 'pageview', 'click: download - ' + hrefAttr);
});

// Use with a video link that has a data-id that describes
// the video and a class of 'videoClick' on the link.
$('.videoClick').on('click', function() {
	var videoTitle = $(this).attr('data-id');
	ga('send', 'pageview', 'click: video - ' + videoTitle);
});

// Use for social sharing by adding a class of
// 'facebook', 'twitter', etc. to your share link.
$('.social a').on('click', function(e) {
	e.preventDefault();
	var network = $(this).attr('class');
	var url = '';
	var redirect = encodeURIComponent(window.location);
	switch(network) {
		case 'facebook':
			url = 'https://www.facebook.com/sharer/sharer.php?u=' + redirect;
			break;
		case 'twitter':
			url = 'https://twitter.com/home?status=Check%20out%20this%20link:%0A%0A' + redirect;
			break;
		case 'linkedin' :
			url = 'https://www.linkedin.com/shareArticle?mini=true&url='+ redirect +'&summary=&source=';
			break;
		case 'google' :
			url = 'https://plus.google.com/share?url=' + redirect;
			break;
		default:
			break;
	}
	window.open(url);
	ga('send', 'pageview', 'click: social - ' + network);
});