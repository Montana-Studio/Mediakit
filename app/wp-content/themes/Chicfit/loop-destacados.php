<div class="destacados">

	<?php $query = new WP_Query('posts_per_page=4&category_name=destacado'); ?>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url('<?php the_field('imagen_post_banner'); ?>');">
			
			<?php the_tags('<ul class="tags"><li><span>#</span>','</li><li><span>#</span>','</li></ul>'); ?>

			<a href="<?php the_permalink() ?>" class="alt_link">
			<h1><?php the_title(); ?></h1>
			</a>
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		</article>

	<?php endwhile;
	wp_reset_postdata();
	else: ?>
		<p>No hay post.</p>
	<?php endif; ?>
</div>
