	<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="shortcut icon" type="image/svg+xml" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.svg">
		<link rel="shortcut icon"  href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico">
		<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css"> 
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mediakit.css"> 

		<?php wp_head(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/mediakit.min.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/easing.min.js" type="text/javascript"></script>

	</head>
	<body <?php body_class(); ?>>

	<?php include (TEMPLATEPATH . '/svg_icon.php'); ?>

	<div class="nav-mobile">
		<div class="logo-mobile">
			<a href="<?php echo home_url(); ?>">
				<svg viewBox="0 0 158.459 40">
					<use xlink:href="#mobile-mediatrends"/> 
				</svg>
			</a>
		</div>
		<div id="menu-nav" class="menu-mobile">
				<svg id ="icon-mobile" viewBox="0 0 25 25">
					<g id="fa-nav">
						<g id="uno">
							<path fill="#FFF" d="M23.431,5.522v1.241c0,0.168-0.09,0.314-0.27,0.437c-0.18,0.123-0.394,0.184-0.64,0.184H2.48
								c-0.247,0-0.46-0.061-0.641-0.184c-0.18-0.123-0.27-0.268-0.27-0.437V5.522c0-0.168,0.09-0.314,0.27-0.437
								c0.18-0.123,0.394-0.184,0.641-0.184h20.041c0.246,0,0.46,0.062,0.64,0.184C23.341,5.208,23.431,5.354,23.431,5.522z"/>
						</g>
						<g id="dos">
							<path fill="#FFF" d="M23.431,11.801v1.292c0,0.175-0.09,0.327-0.27,0.454c-0.18,0.128-0.394,0.192-0.64,0.192H2.48
								c-0.247,0-0.46-0.064-0.641-0.192c-0.18-0.128-0.27-0.279-0.27-0.454v-1.292c0-0.175,0.09-0.327,0.27-0.455
								s0.394-0.192,0.641-0.192h20.041c0.246,0,0.46,0.064,0.64,0.192C23.341,11.475,23.431,11.626,23.431,11.801z"/>
						</g>
						<g id="tres">
							<path fill="#FFF" d="M23.431,18.077v1.348c0,0.182-0.09,0.341-0.27,0.474c-0.18,0.133-0.394,0.2-0.64,0.2H2.48
							c-0.247,0-0.46-0.067-0.641-0.2s-0.27-0.291-0.27-0.474v-1.348c0-0.183,0.09-0.341,0.27-0.474c0.18-0.133,0.394-0.2,0.641-0.2
							h20.041c0.246,0,0.46,0.067,0.64,0.2C23.341,17.737,23.431,17.895,23.431,18.077z"/>
						</g>
					</g>
				</svg>
		</div>
	</div>
		<!-- wrapper -->
		<div class="wrapper mCustomScrollbar" data-mcs-axis="y" >
			
		
			
