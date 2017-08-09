<!DOCTYPE html>
<?php require("../_assets/common.php"); ?>
<html lang="en">
<head>
	<? $cri->includeContent(1,'topInc'); ?>
</head>
<body>
<? $cri->includeContent(1,'header'); ?>
<? $cri->includeContent(1,'nav'); ?>
<div class="fullContainer fullContainer--maps">
	<h1 class="heading">Johnson Ferry</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<h2 class="subHeading subHeading--maps">Trail Maps:</h2>
			<div class="entrances">
				<a target="_blank" href="../_maps/johnson-ferry-north.pdf">
					<img src="../_images/johnson-ferry/maps/map1.jpg" alt="Johnson Ferry North Trail Map"><h2>Johnson Ferry North</h2>
				</a>
			</div>
			<div class="entrances">
				<a target="_blank" href="../_maps/johnson-ferry-south.pdf">
					<img src="../_images/johnson-ferry/maps/map2.jpg" alt="Johnson Ferry South Trail Map"><h2>Johnson Ferry South</h2>
				</a>
			</div>
		</div>
	</div>
</div>




<div class="footerMobile"><? $cri->includeContent(1,'footer'); ?></div>


<? $cri->includeContent(1,'botInc'); ?>


<script>
	$(document).ready( function() {
		
	});
</script>
</body>
</html>