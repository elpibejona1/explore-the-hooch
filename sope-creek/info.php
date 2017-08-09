<!DOCTYPE html>
<?php require("../_assets/common.php"); ?>
<html lang="en">
<head>
	<? $cri->includeContent(1,'topInc'); ?>
</head>
<body>
<? $cri->includeContent(1,'header'); ?>
<? $cri->includeContent(1,'nav'); ?>
<div class="fullContainer fullContainer--hero">
	<div class="content content__hero content__hero--info">
		<img src="http://placehold.it/500x200?text=Image+to+come" alt="Image to Come">
	</div>
	<h1 class="heading">Sope Creek</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<div class="basicInfo">
				<h2 class="subHeading">Trail Location: <br><span>Duluth, GA</span></h2>
				<h2 class="subHeading">Difficulty: <br><span>Easy &ndash; Moderate</span></h2>
			</div>
			<div class="amenities">
				<span class="hint--top" data-hint="Hiking Trails"><img src="../_images/_global/hiking.svg" alt="Hiking Trails"></span>
				<span class="hint--top" data-hint="Mountain Bike Trails"><img src="../_images/_global/biking.svg" alt="Mountain Bike Trails"></span>
				<span class="hint--top" data-hint="Fishing"><img src="../_images/_global/fishing.svg" alt="Fishing"></span>
				<span class="hint--top" data-hint="Historic Attraction"><img src="../_images/_global/historic.svg" alt="Historic Attraction"></span>
			</div>
			<p class="unitDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, reprehenderit laudantium ipsam! Porro fugiat libero vel, et obcaecati dignissimos quaerat vero deleniti laboriosam soluta quis perspiciatis, repellendus beatae dolore veniam tempora, modi optio laudantium? Distinctio dolorum adipisci tempore, nesciunt vel aliquid accusamus non, consequatur necessitatibus suscipit voluptatum, error minima modi!</p>
		</div>
	</div>
</div>

<div class="footerMobile"><? $cri->includeContent(1,'footer'); ?></div>
<? $cri->includeContent(1,'botInc'); ?>

<script>
	$(document).ready( function() {
		oneMap('sope-creek');
		oneEntrance('Sope Creek');
	});
</script>
</body>
</html>