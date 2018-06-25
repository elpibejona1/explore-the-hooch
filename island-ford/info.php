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
	<h1 class="heading">Island Ford</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<div class="basicInfo">
				<h2 class="subHeading">Trail Location: <br><span>Sandy Springs, GA</span></h2>
				<h2 class="subHeading">Difficulty: <br><span></span></h2>
			</div>
			<div class="amenities">
				<span class="hint--top" data-hint="Hiking Trails"><img src="../_images/_global/hiking.svg" alt="Hiking Trails"></span>
				<span class="hint--top" data-hint="Boat Launch"><img src="../_images/_global/boatLaunch.svg" alt="Boat Launch"></span>
				<span class="hint--top" data-hint="Small Boat Launch"><img src="../_images/_global/smallBoatLaunch.svg" alt="Small Boat Launch"></span>
				<span class="hint--top" data-hint="Picnic Area"><img src="../_images/_global/picnic.svg" alt="Picnic Area"></span>
				<span class="hint--top" data-hint="Fishing"><img src="../_images/_global/fishing.svg" alt="Fishing"></span>
				<br>
				<br>
				<span class="hint--top" data-hint="Visitor Center"><img src="../_images/_global/rangerStation.svg" alt="Visitor Center"></span>
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
		oneEntrance('Island Ford');
	});
</script>
</body>
</html>