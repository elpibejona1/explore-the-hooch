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
	<h1 class="heading">Palisades West</h1>
</div>
<div class="container">
	<div class="row">
		<div class="content">
			<h2 class="subHeading subHeading--entrances">Park Entrances:</h2>
			<div class="entrances entrances--first">
				<a target="_blank" href="https://www.google.com/maps/dir//33.890775,-84.4484104/@33.8910555,-84.4513689,17.16z?hl=en">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Akers Drive Entrance"><h2>Akers Drive</h2>
				</a>
			</div>
			<div class="entrances">
				<a target="_blank" href="https://www.google.com/maps/dir//33.8692252,-84.4549177/@33.8697681,-84.4582976,17.16z">
					<img src="http://placehold.it/75x75?text=Image+to+come" alt="Paces Mill Entrance"><h2>Paces Mill</h2>
				</a>
			</div>
		</div>
	</div>
</div>




<div class="footerMobile"><?php $cri->includeContent(1,'footer'); ?></div>


<?php $cri->includeContent(1,'botInc'); ?>


<script>
	$(document).ready( function() {
		oneMap('palisades-west');
	});
</script>
</body>
</html>