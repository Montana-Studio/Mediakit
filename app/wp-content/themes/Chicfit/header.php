<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<!-- FONTS -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<script>

			$(document).ready(function(){

				var elem = document.getElementById('mySwipe');
				window.mySwipe = Swipe(elem, {
				// startSlide: 4,
				auto: 3000,
				continuous: true,
				disableScroll: true,
				// stopPropagation: true,
				// callback: function(index, element) {},
				// transitionEnd: function(index, element) {}
				});				});

		</script>
	</head>
	<body <?php body_class(); ?>>

		<?php include (TEMPLATEPATH . '/icons.php'); ?>

		<div class="nav-top">
			<div class="top-social">
				<li><i class="fa fa-facebook"></i></li>
				<li><i class="fa fa-twitter"></i></li>
				<li><i class="fa fa-instagram"></i></li>
			</div>
			<div class="search">
				<div class="cont_search">

					<?php get_template_part('searchform'); ?>

				</div>
				<div class="search-icon">
					<i class="fa fa-search"></i>
				</div>
			</div>
		</div>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->

					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<svg viewBox="0 0 300 95">
								<use xlink:href="#svg_logo"/> 
							</svg>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>

					
					<!-- /nav -->

			</header>
			<!-- /header -->
