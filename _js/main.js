// Header

$('.header__hamburger').on('click', function(){
	$('.header__buttons').toggleClass('active');

	$('.header__dropdown').slideToggle();
	$('.closeEverything').toggleClass('active');
})

/*$('.header__buttons .fa-bars').on('click', function() {
	$('.header__buttons .fa').fadeToggle();
	$('.header__dropdown').slideToggle();
	$('.closeEverything').toggleClass('active');
});

$('.header__buttons .fa-times').on('click', function() {
	$('.header__buttons .fa').fadeToggle();
	$('.header__dropdown').slideToggle();
	$('.closeEverything').toggleClass('active');
});*/

$('.closeEverything').on('click', function(){
	$('.header__buttons').toggleClass('active');
	$('.header__dropdown').slideToggle();
	$('.closeEverything').toggleClass('active');
})

// Units with one map

var oneMap = function(unit){
	$('.mapLink').attr('target', '_blank')
	$('.mapLink').attr('href', '../_maps/' + unit + '.pdf')
}

// Units with one Entrance

var oneEntrance = function(unit){
	$('.directionsLink').attr('target', '_blank')
	
	$(parkInfo).each( function( i ){
		if ( parkInfo[i][0] === unit ) {
			$('.directionsLink').attr( 'href', parkInfo[i][1].dirURL );
		};
	});
}

// Get Current Weather

function convertTimestamp(timestamp) {
  var d = new Date(timestamp * 1000),	// Convert the passed timestamp to milliseconds
		yyyy = d.getFullYear(),
		mm = ('0' + (d.getMonth() + 1)).slice(-2),	// Months are zero based. Add leading 0.
		dd = ('0' + d.getDate()).slice(-2),			// Add leading 0.
		hh = d.getHours(),
		h = hh,
		min = ('0' + d.getMinutes()).slice(-2),		// Add leading 0.
		ampm = 'AM',
		time;
			
	if (hh > 12) {
		h = hh - 12;
		ampm = 'PM';
	} else if (hh === 12) {
		h = 12;
		ampm = 'PM';
	} else if (hh == 0) {
		h = 12;
	}
	
	// ie: 2013-02-18, 8:35 AM	
	time = h + ':' + min + ' ' + ampm;
		
	return time;
}

var unitWeather = function(unit){
	var $weatherAPI = 'http://api.openweathermap.org/data/2.5/weather?&APPID=460510bb0907cfdd3a3f841880e34246';

	$(parkInfo).each( function( i ){
		if ( parkInfo[i][0] === unit ) {
			var $weatherOptions = {
				lat: parkInfo[i][1].coords.lat,
				lon: parkInfo[i][1].coords.lon,
				units: 'imperial'
			}

			$.getJSON($weatherAPI, $weatherOptions, function (response){
				//currentWeather__main
				$('.currentWeather__main img').attr({
					src: 'http://openweathermap.org/img/w/' + response.weather[0].icon + '.png',
					alt: response.weather[0].main
				});

				$('.currentWeather__main h1').html(Math.round(response.main.temp) + '<sup>&deg;F</sup>');

				//currentWeather__details
				$('.currentWeather__description').html(response.weather[0].main);

				$('.currentWeather__details--wind').html('Wind: <span>' + Math.round(response.wind.speed) + ' mph</span');

				$('.currentWeather__details--humidity').html('Humidity: <span>' + Math.round(response.main.humidity) + '&#37</span>');

				var sunrise = convertTimestamp(response.sys.sunrise);
				$('.currentWeather__details--sunrise').html('Sunrise: <span>' + sunrise);

				var sunset = convertTimestamp(response.sys.sunset);
				$('.currentWeather__details--sunset').html('Sunset: <span>' + sunset);
			});
		};
	});
};

// Get Forecast

var unitForecast = function(unit){
	var contentArray = [
		'icon',
		'temp',
		'description',
		'precip',
		'wind',
		'humidity'
	];

	var dayArray = [
		'today',
		'tomorrow'
	]

	var $weatherAPI = 'http://api.openweathermap.org/data/2.5/forecast/daily?&APPID=460510bb0907cfdd3a3f841880e34246';

	$(parkInfo).each( function( i ){
		if ( parkInfo[i][0] === unit ) {
			var $weatherOptions = {
				lat: parkInfo[i][1].coords.lat,
				lon: parkInfo[i][1].coords.lon,
				units: 'imperial'
			};

			$.getJSON($weatherAPI, $weatherOptions, function (response){
				$(dayArray).each( function(j){
					$('.icon--' + dayArray[j] + ' img').attr({
						src: 'http://openweathermap.org/img/w/' + response.list[j].weather[0].icon + '.png',
						alt: response.list[j].weather[0].main
					});

					$('.description--' + dayArray[j]).html( response.list[j].weather[0].main );

					$('.temp--' + dayArray[j]).html( 'High: ' + Math.round(response.list[j].temp.max) + '&deg; / Low: '  + Math.round(response.list[j].temp.min) + '&deg;');

					/*$('.high--' + dayArray[j]).html( 'High: ' + Math.round(response.list[j].temp.max) + '&deg;');

					$('.low--' + dayArray[j]).html( 'Low: '  + Math.round(response.list[j].temp.min) + '&deg;');*/
				});


				
			});
		};
	});
}
unitForecast($('.heading--unit').text());

// Carousel setup

var centerSlideshow = function() {
	if ($(window).width() > 1023) {

		$('.slides').attr('data-cycle-carousel-visible','3');

		var w = $('.slidesWrap').width();
		var slideWidth = (w*0.75);
		var offsetWidth = w*(0.625);
		$('.slide').width(slideWidth);
		$('.slides').css('margin-left',-offsetWidth);

	}
}

var captions = function(){
	// Insert caption of middle photo
	if ($(window).width() > 1023) {
		var slideOneCaption = $('.slide:nth-of-type(2)').attr('data-cycle-desc');
		console.log(slideOneCaption);
		$('.slideshow__caption').html(slideOneCaption);
	} else {
		var slideOneCaption = $('.slide:nth-of-type(1)').attr('data-cycle-desc');
		console.log(slideOneCaption);
		$('.slideshow__caption').html(slideOneCaption);
	}

	// Change captions on click with slideshow
	$('.slideControls').on('click', function(){
		$('.slide').each( function(){
			if ($(this).hasClass('cycle-slide-active')) {
				if ($(window).width() > 1023) {
				var caption = $(this).next().attr('data-cycle-desc');
				$('.slideshow__caption').html(caption);
				} else {
					var caption = $(this).attr('data-cycle-desc');
					$('.slideshow__caption').html(caption);
				}
			}
		});
	});
}


