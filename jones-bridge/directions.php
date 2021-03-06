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
	<h1 class="heading">Jones Bridge</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content content--last">
			<h2 class="subHeading subHeading--entrances">Park Entrances:</h2>
			<div class="entrances entrances--first">
				<a target="_blank" href="https://www.google.com/maps/dir//34.0027799,-84.2554679/@34.0028837,-84.2554918,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Main Entrance"><h2>Main Entrance</h2>
				</a>
			</div>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//33.9910353,-84.2592287/@33.991004,-84.2592618,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Chattahoochee River Environmental Education Center (CREEC) Entrance"><h2>Chattahoochee River Environmental Education Center</h2>
				</a>
			</div>
		</div>
	</div>
</div>




<div class="footerMobile"><?php $cri->includeContent(1,'footer'); ?></div>


<?php $cri->includeContent(1,'botInc'); ?>


<script>
	$(document).ready( function() {
		oneMap('jones-bridge');
	});
</script>
</body>
</html>