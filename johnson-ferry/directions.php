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
	<h1 class="heading">Johnson Ferry</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<h2 class="subHeading subHeading--entrances">Park Entrances:</h2>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//33.9634205,-84.3915592/@33.963483,-84.3915285,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Hyde Farm Entrance"><h2>Hyde Farm</h2>
				</a>
			</div>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//33.9452817,-84.40596/@33.9447449,-84.4073426,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Johnson Ferry Road Entrance"><h2>Johnson Ferry Road</h2>
				</a>
			</div>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//33.9381531,-84.414872/@33.9381433,-84.4145444,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Columns Drive Entrance"><h2>Columns Drive</h2>
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