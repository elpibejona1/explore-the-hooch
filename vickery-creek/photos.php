<!DOCTYPE html>
<?php require("../_assets/common.php"); ?>
<html lang="en">
<head>
	<? $cri->includeContent(1,'topInc'); ?>
</head>
<body>
<? $cri->includeContent(1,'header'); ?>
<? $cri->includeContent(1,'nav'); ?>

<h1 class="heading heading--photos">Vickery Creek</h1>

<div class="monitorContainer">
	<div class="row">
		<div class="slidesWrap">
			<div class="relativeWrap">
				<div class="slideControls slideControls--left" id=prev><i class="fa fa-chevron-left"></i></div>
	        	<div class="slideControls slideControls--right" id=next><i class="fa fa-chevron-right"></i></div>
				<div class="slides slideshow"
				data-cycle-fx='carousel'
				data-cycle-swipe=true
    			data-cycle-swipe-fx=scrollHorz
				data-cycle-next="#next"
				data-cycle-prev="#prev"
				data-cycle-timeout=0>

					<img src="../_images/palisades-east/image1.jpg" class="slide" data-cycle-desc="View from the overlook between EP 10 and EP 14 (see unit map)">
					<img src="../_images/palisades-east/image2.jpg" class="slide" data-cycle-desc="Spring flowers on the East Palisades Trail">
					<img src="../_images/palisades-east/image3.jpg" class="slide" data-cycle-desc="Spring flowers on the East Palisades Trail">
				</div>
				<div class="slideshow__caption"></div>
			</div>
		</div>
	</div>
</div>
<div class="footerMobile"><? $cri->includeContent(1,'footer'); ?></div>
<? $cri->includeContent(1,'botInc'); ?>
<script src="../_js/jquery.cycle2.min.js"></script>
<script src="../_js/jquery.cycle2.carousel.min.js"></script>
<script src="../_js/jquery.cycle2.center.min.js"></script>
<script src="../_js/jquery.cycle2.swipe.min.js"></script>
<script>
	$(document).ready( function() {

		centerSlideshow();

		$('.slideshow').cycle();

		captions();
	});
</script>
</body>
</html>