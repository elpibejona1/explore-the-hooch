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
	<div class="content content__hero content__hero--info">
		<img src="http://placehold.it/500x200?text=Image+to+come" alt="Image to Come">
	</div>
	<h1 class="heading">Powers Island</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<div class="basicInfo">
				<h2 class="subHeading">Trail Location: <br><span>Sandy Springs, GA</span></h2>
				<h2 class="subHeading">Difficulty: <br><span>Easy - Moderate</span></h2>
			</div>
			<div class="amenities">
				<span class="hint--top" data-hint="Hiking Trails"><img src="../_images/_global/hiking.svg" alt="Hiking Trails"></span>
				<span class="hint--top" data-hint="Small Boat Launch"><img src="../_images/_global/smallBoatLaunch.svg" alt="Small Boat Launch"></span>
				<span class="hint--top" data-hint="Fishing"><img src="../_images/_global/fishing.svg" alt="Fishing"></span>
				<span class="hint--top" data-hint="Payment Machine"><img src="../_images/_global/cashMachine.svg" alt="Payment Machine"></span>
				<span class="hint--top" data-hint="Restroom"><img src="../_images/_global/restroom.svg" alt="Restroom"></span>
			</div>
			<p class="unitDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, reprehenderit laudantium ipsam! Porro fugiat libero vel, et obcaecati dignissimos quaerat vero deleniti laboriosam soluta quis perspiciatis, repellendus beatae dolore veniam tempora, modi optio laudantium? Distinctio dolorum adipisci tempore, nesciunt vel aliquid accusamus non, consequatur necessitatibus suscipit voluptatum, error minima modi!</p>
		</div>
	</div>
</div>

<div class="footerMobile"><?php $cri->includeContent(1,'footer'); ?></div>
<?php $cri->includeContent(1,'botInc'); ?>

<script>
	$(document).ready( function() {
		oneMap('powers-island');
		oneEntrance('Powers Island');
	});
</script>
</body>
</html>