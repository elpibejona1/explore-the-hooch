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
	<h1 class="heading">Bowmans Island</h1>
</div>
<div class="container">
	<div class="row row--directions">
		<div class="content content--last">
			<h2 class="subHeading subHeading--entrances">Park Entrances:</h2>
			<div class="entrances entrances--first">
				<a target="_blank" href="https://www.google.com/maps/dir//34.1554853,-84.0707268/@34.155432,-84.0729812,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Upper Pool Entrance"><h2>Upper Pool</h2>
				</a>
			</div>
			<div class="entrances">			
				<a target="_blank" href="https://www.google.com/maps/dir//34.1629185,-84.0768894/@34.1629363,-84.0791156,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Lower Pool Entrance"><h2>Lower Pool</h2>
				</a>	
			</div>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//34.1429864,-84.0753055/@34.1431345,-84.0753139,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Island Ford Road Entrance"><h2>Island Ford Road</h2>
				</a>	
			</div>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//34.1436949,-84.095919/@34.1439627,-84.0960107,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Chattahoochee River Club Entrance"><h2>Chattahoochee River Club</h2>
				</a>
			</div>
		</div>
	</div>
</div>




<div class="footerMobile"><?php $cri->includeContent(1,'footer'); ?></div>


<?php $cri->includeContent(1,'botInc'); ?>


<script>
	$(document).ready( function() {
		oneMap('bowmans-island');
	});
</script>
</body>
</html>