<div class="destacados">

	<?php $query = new WP_Query('posts_per_page=4&category_name=destacado'); ?>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<article class="content-destacados" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div>
				<a href="<?php the_permalink()?>">
					<img src="<?php the_field('imagen_post_banner'); ?>" alt="" class="img-loop">
				</a>
			</div>
			<div class="content-art">
				<a href="<?php the_permalink()?>">
					<h1><?php the_title(); ?></h1>
				</a>
				<p><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></p>
				<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>

				<a href="<?php the_permalink()?>" class="alt_link"></a>
			</div>
		</article>

	<?php endwhile;
	wp_reset_postdata();
	else: ?>
		<h2>No hay post.</h2>
	<?php endif; ?>
</div>
