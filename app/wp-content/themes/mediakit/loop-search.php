<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="content-title">
			<h2 class="highlight" style="display:table;"><?php echo sprintf( __( '<span>%s</span> Search Results for ', 'html5blank' ), $wp_query->found_posts ); ?></h2>
			<p><?php echo get_search_query(); ?></p>
	</div>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="search-loop">
			<div class="img-search">
				<img src="<?php the_field('imagen_logo_sitio'); ?>" alt="">
			</div>
			<div class="title-resultado">
				<div class="resultado-1">Nombre</div>
				<div class="pattern resultado-2"><a class="highlight-inv"><?php the_title(); ?></a></div>
			</div>
			<div class="title-resultado">
				<div class="resultado-1">Vertical</div>
				<div class="pattern resultado-2"><?php the_category(' '); ?></div>
			</div>
			<div class="title-resultado">
				<div class="resultado-1">Reach</div>
				<div class="pattern resultado-2"><a class="highlight-inv">134.000</a></div>
			</div>
		</div>
	</article>
	<!-- /article -->
<?php get_template_part('pagination'); ?>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="nothing-message">
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
