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
	<h1 class="heading">Cochran Shoals</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<h2 class="subHeading subHeading--maps">Trail Maps:</h2>
				<div class="entrances">
					<a target="_blank" href="../_maps/cochran-shoals-columns-drive.pdf">
						<img src="../_images/cochran-shoals/maps/map1.jpg" alt="Columns Drive Trail Map"><h2>Columns Drive</h2>
					</a>
				</div>
				<div class="entrances">
					<a target="_blank" href="../_maps/cochran-shoals-interstate-North.pdf">
						<img src="../_images/cochran-shoals/maps/map2.jpg" alt="Interstate North Trail Map"><h2>Interstate North</h2>
					</a>
				</div>
				<div class="entrances">
					<a target="_blank" href="../_maps/cochran-shoals-fitness-trail.pdf">
						<img src="../_images/cochran-shoals/maps/map3.jpg" alt="Fitness Trail"><h2>Fitness Trail</h2>
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