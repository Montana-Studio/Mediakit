<?php get_header(); ?>
<div class="nav-mobile">
	<div class="logo-mobile">
		<a href="<?php echo home_url(); ?>">
			<svg viewBox="0 0 158.459 40">
				<use xlink:href="#mobile-mediatrends"/> 
			</svg>
		</a>
	</div>
	<div id="menu-nav" class="menu-mobile"><i class="fa fa-bars"></i></div>
</div>
	<main role="main">
		<!-- section -->
		<section class="search-content">

			<div class="encabezado" style="background-image:url('<?php echo $feat_image;?>') ">
				<div class="content-title">
					<h2><a class="highlight"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></a></h2>
				</div>
			</div>

			<?php get_template_part('loop-search'); ?>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
