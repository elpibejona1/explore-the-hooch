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
		<img src="../_images/palisades-east/hero.jpg" alt="River View">
	</div>
	<h1 class="heading">Palisades East</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<div class="basicInfo">
				<h2 class="subHeading">Trail Location: <br><span>Sandy Springs, GA</span></h2>
				<h2 class="subHeading">Difficulty: <br><span>Easy &ndash; Moderate</span></h2>
			</div>
			<div class="amenities">
				<span class="hint--top" data-hint="Hiking Trails"><img src="../_images/_global/hiking.svg" alt="Hiking Trails"></span>
				<span class="hint--top" data-hint="Picnic Area"><img src="../_images/_global/picnic.svg" alt="Picnic Area"></span>
				<span class="hint--top" data-hint="Small Boat Launch"><img src="../_images/_global/smallBoatLaunch.svg" alt="Small Boat Launch"></span>
				<span class="hint--top" data-hint="Scenic Overlook"><img src="../_images/_global/scenicView.svg" alt="Scenic Overlook"></span>
				<span class="hint--top" data-hint="Fishing"><img src="../_images/_global/fishing.svg" alt="Fishing"></span>
			</div>
			<p class="unitDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, reprehenderit laudantium ipsam! Porro fugiat libero vel, et obcaecati dignissimos quaerat vero deleniti laboriosam soluta quis perspiciatis, repellendus beatae dolore veniam tempora, modi optio laudantium? Distinctio dolorum adipisci tempore, nesciunt vel aliquid accusamus non, consequatur necessitatibus suscipit voluptatum, error minima modi!</p>
		</div>
	</div>
</div>

<div class="footerMobile"><? $cri->includeContent(1,'footer'); ?></div>
<? $cri->includeContent(1,'botInc'); ?>

<script>
	$(document).ready( function() {
		oneMap('palisades-east');
	});
</script>
</body>
</html>