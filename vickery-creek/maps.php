<!DOCTYPE html>
<?php require("../_assets/common.php"); ?>
<html lang="en">
<head>
	<?php $cri->includeContent(1,'topInc'); ?>
</head>
<body>
<?php $cri->includeContent(1,'header'); ?>
<?php $cri->includeContent(1,'nav'); ?>
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




<div class="footerMobile"><?php $cri->includeContent(1,'footer'); ?></div>


<?php $cri->includeContent(1,'botInc'); ?>


<script>
	$(document).ready( function() {
		
	});
</script>
</body>
</html>