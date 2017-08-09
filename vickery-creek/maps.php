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
	<h1 class="heading">Vickery Creek</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<h2 class="subHeading subHeading--maps">Trail Maps:</h2>
			<div class="entrances">
				<a target="_blank" href="../_maps/vickery-creek.pdf">
					<img src="../_images/vickery-creek/maps/map1.jpg" alt="Vickery Creek Trail Map"><h2>Vickery Creek</h2>
				</a>
			</div>
			<div class="entrances">
				<a target="_blank" href="../_maps/vickery-creek-allenbrook.pdf">
					<img src="../_images/vickery-creek/maps/map2.jpg" alt="Allenbrook Trail Map"><h2>Allenbrook</h2>
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