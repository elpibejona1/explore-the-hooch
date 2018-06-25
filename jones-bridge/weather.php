<!DOCTYPE html>
<?php require("../_assets/common.php"); ?>
<html lang="en">
<head>
	<?php $cri->includeContent(1,'topInc'); ?>
</head>
<body>
<?php $cri->includeContent(1,'header'); ?>
<?php $cri->includeContent(1,'nav'); ?>
<div class="fullContainer fullContainer--hero">
	<div class="content content__hero content__hero--weather">
		<img src="../_images/palisades-east/image2.jpg" alt="River View">
	</div>
	<h1 class="heading heading--unit">Jones Bridge</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--weather">
			<div class="currentWeather">
				<div class="currentWeather__main">
					<img src="" alt="">
					<h1></h1><br>
				</div>
				<h3 class="currentWeather__description"></h3>
			</div>
			<div class="currentWeather__info">
				<ul>
					<li class="currentWeather__details currentWeather__details--wind"></li>
					<li class="currentWeather__details currentWeather__details--humidity"></li>
					<li class="currentWeather__details currentWeather__details--sunrise"></li>
					<li class="currentWeather__details currentWeather__details--sunset"></li>
				</ul>
			</div>
		</div>
		<div class="content content--weather content--last">
			<div class="forecast">
				<div class="forecast__content forecast__content--first">
					<div class="forecast__details forecast__details--day">TODAY</div>
					<div class="forecast__details forecast__details--main"><span class="icon icon--today"><img src="" alt=""></span><span class="description description--today"></span></div>
					<div class="forecast__details forecast__details--temp"><span class="temp temp--today"></span></div>
				</div>
				<div class="forecast__content forecast__content--last">
					<div class="forecast__details forecast__details--day">TOMORROW</div>
					<div class="forecast__details forecast__details--main"><span class="icon icon--tomorrow"><img src="" alt=""></span><span class="description description--tomorrow"></span></div>
					<div class="forecast__details forecast__details--temp"><span class="temp temp--tomorrow"></span></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footerMobile"><?php $cri->includeContent(1,'footer'); ?></div>
<?php $cri->includeContent(1,'botInc'); ?>

<script>
	$(document).ready( function() {
		oneMap('jones-bridge');

		unitWeather($('.heading--unit').text());
	});
</script>

</body>
</html>