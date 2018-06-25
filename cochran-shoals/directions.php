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
	<h1 class="heading">Cochran Shoals</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<h2 class="subHeading subHeading--entrances">Park Entrances:</h2>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//33.9215991,-84.4395915/@33.9216556,-84.439709,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Columns Drive Road Entrance"><h2>Columns Drive Road</h2>
				</a>
			</div>
			<div class="entrances">
					<a target="_blank" href="https://www.google.com/maps/dir//33.901966,-84.443993/@33.9029339,-84.4427328,17.16z?hl=en">
				<img src="http://placehold.it/75x75?text=Image+to+come" alt="Interstate North Entrance"><h2>Interstate North</h2>
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