<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="search-loop">
			<div class="img-search">
				<img src="<?php the_field('imagen_logo_sitio'); ?>" alt="">
			</div>
			<h2 class="title-search">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="title-resultado">
				<div class="resultado-1">Nombre</div>
				<div class="resultado-2"><?php the_title(); ?></div>
			</div>
			<div class="title-resultado">
				<div class="resultado-1">Nombre</div>
				<div class="resultado-2"><?php the_title(); ?></div>
			</div>
			<div class="title-resultado">
				<div class="resultado-1">Nombre</div>
				<div class="resultado-2"><?php the_title(); ?></div>
			</div>
		</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
