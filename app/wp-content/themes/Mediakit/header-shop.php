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
		
		<?php wp_head(); ?>
		
		<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/marketplace.css"> 

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
                <div class="top-header">

                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>"></a>
                    </div>
                    <!-- /logo -->

                    <?php //get_template_part('searchform'); ?>

                    <!-- nav -->
                    <nav class="nav" role="navigation-shop">
                        <i class="fa fa-bars"></i>
                        <?php wp_nav_menu( array('theme_location' => 'extra-menu') ); ?>
                    </nav>
                    <!-- /nav -->

                </div>

                <!-- nav -->
                <nav class="nav" role="navigation">
                    <?php wp_nav_menu(array('after' => '<div class="line"></div>','theme_location'=>'cat-menu')); ?>
                </nav>
                <!-- /nav -->
			</header>
			<!-- /header -->
