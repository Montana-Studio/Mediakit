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

		<link rel=”shortcut icon”  href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mediakit.css"> 

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

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
			<svg viewBox="0 0 25 25">
				<use xlink:href="#fa-nav"/> 
			</svg>
		</div>
	</div>
		<!-- wrapper -->
		<div class="wrapper">
			
			<!-- header -->
			<header class="page-header">
			
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<div class="content-header">
							<div class="encabezado" style="background-image:url('<?php echo $feat_image;?>') ">
								<div class="content-title">
									<h2><a class="highlight" href=""><?php the_title(); ?></a></h2>
									<div class="bajada"><?php the_content(); ?></div>
								</div>
							</div>
						</div>
					</article>
					<?php endwhile; ?>

					<?php else: ?>

					<?php endif; ?>
					
			</header>
			<!-- /header -->
