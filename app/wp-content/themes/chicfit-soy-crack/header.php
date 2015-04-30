<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name='robots' content='noindex,follow' />
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/chicfit.css">
		

		<?php wp_head(); ?>

        <!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'xxxxxxxx', 'auto');
		  ga('send', 'pageview');

		</script>

		
	</head>

	<body <?php body_class(); ?>>

		<?php include (TEMPLATEPATH . '/svg_icons.php'); ?>
		<div class="nav-top">
			<div class="top-social">
				<li><a href="https://www.facebook.com/chicfitdaily"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/chicfitdaily"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://instagram.com/chicfitdaily/"><i class="fa fa-instagram"></i></a></li>
			</div>

			<!-- MOBILE Nav -->

			<div class="nav-mobile">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<svg viewBox="0 0 300 95">
							<use xlink:href="#svg_logo"/> 
						</svg>
					</a>
				</div>
			</div>

			<!-- /MOBILE Nav -->

			<div class="search">
				<div class="cont_search">

					<?php get_template_part('searchform'); ?>

				</div>
				<div class="search-icon">
					<i class="fa fa-search"></i>
				</div>
			</div>
		</div>
		<div class="nav-mob">
			<div class="content-menu">
				<?php html5blank_nav(); ?>
			</div>
			<div class="pestana">
				<svg viewBox="0 0 140.909 46.662">
					<use xlink:href="#svg_pestana"/> 
				</svg>
			</div>
		</div>

		<!-- wrapper -->
		<div class="wrapper">

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
