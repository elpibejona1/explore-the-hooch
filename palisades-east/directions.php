<!DOCTYPE html>
<?php require("../_assets/common.php"); ?>
<html lang="en">
<head>
	<?php $cri->includeContent(1,'topInc'); ?>
</head>
<body>
<?php $cri->includeContent(1,'header'); ?>
<?php $cri->includeContent(1,'nav'); ?>
<div class="fullContainer fullContainer--hero fullContainer--directions">
	<h1 class="heading">Palisades East</h1>
</div>
<div class="container">
	<div class="row row--directions">
		<div class="content content--last">
			<h2 class="subHeading subHeading--entrances">Park Entrances:</h2>
			<div class="entrances entrances--first">
				<a target="_blank" href="https://www.google.com/maps/dir//33.8878884,-84.4335919/@33.8888458,-84.4340013,17.16z?hl=en">
					<img src="../_images/palisades-east/entrance1.jpg" alt="Indian Trail Entrance"><h2>Indian Trail</h2>
				</a>
			</div>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//33.8767427,-84.4377589/@33.8766485,-84.4399202,17.16z">
					<img src="../_images/palisades-east/entrance1.jpg" alt="Whitewater Creek Entrance"><h2>Whitewater Creek</h2>
				</a>
			</div>
		</div>
	</div>
</div>




<div class="footerMobile"><?php $cri->includeContent(1,'footer'); ?></div>


<?php $cri->includeContent(1,'botInc'); ?>


<script>
	$(document).ready( function() {
		oneMap('palisades-east');
	});
</script>
</body>
</html>