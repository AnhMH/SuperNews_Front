<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<?php echo $this->element('Layout/head'); ?>

</head>

<body class="layout-narrow">

	<!-- Page / Start -->	
	<div id="page" class="hfeed site clearfix">
		<!-- Masthead / Start -->
		<?php echo $this->element('Layout/header'); ?>
		<!-- Masthead / End -->

		<!-- Site Main / Start -->
		<main id="main" class="site-main container" role="main" style="display:block">

			<?php echo $this->fetch('content'); ?>
			<!-- Primary / End -->

			<?php echo $this->element('Layout/sidebar'); ?>

			<div class="clearfix"></div>

			<!-- Sidebar #2 / End -->		

			<!-- Carousel-1 / Start -->
			<?php echo $this->element('Layout/sectionvideo'); ?>
			<!-- Carousel-1 / End -->

		</main>
		<!-- Site Main / End -->
		
		<!-- Footer / Start -->	
		<?php echo $this->element('Layout/footer'); ?>
		<!-- Footer / End -->	

	</div>
	<!-- Page / End -->

	<!-- JavaScripts -->
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery.js"></script>	
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery.matchHeight.js"></script>		
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/hoverIntent.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/superfish.js"></script>	
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery.sidr.min.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/retina.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery.sticky.js"></script>
	<script type='text/javascript' src="<?php echo $BASE_URL;?>/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery.custom.js"></script>	

</body>
</html>
