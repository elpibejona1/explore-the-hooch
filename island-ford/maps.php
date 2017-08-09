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
	<h1 class="heading">Island Ford</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<h2 class="subHeading subHeading--maps">Trail Maps:</h2>
				<div class="entrances">
					<a target="_blank" href="../_maps/island-ford.pdf">
						<img src="../_images/island-ford/maps/map1.jpg" alt="Island Ford Trail Map"><h2>Island Ford</h2>
					</a>
				</div>
				<div class="entrances">
					<a target="_blank" href="../_maps/island-ford-north.pdf">
						<img src="../_images/island-ford/maps/map2.jpg" alt="Island Ford North Trail Map"><h2>Island Ford North</h2>
					</a>
				</div>
				<div class="entrances">
					<a target="_blank" href="../_maps/island-ford-hewlett-lodge.pdf">
						<img src="../_images/island-ford/maps/map3.jpg" alt="Hewlett Lodge Detail Trail Map"><h2>Hewlett Lodge Detail</h2>
					</a>
				</div>
		</div>
	</div>
</div>




<div class="footerMobile"><? $cri->includeContent(1,'footer'); ?></div>


<? $cri->includeContent(1,'botInc'); ?>


<script>
	$(document).ready( function() {
		oneEntrance('Island Ford');
	});
</script>
</body>
</html>