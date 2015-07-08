<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="search-loop">
					<div class="img-search">
						<a href="<?php the_permalink()?>">
							<img src="<?php the_field('imagen_logo_sitio'); ?>" alt="">
						</a>
					</div>
					<div class="title-resultado">
						<div class="resultado-1">Nombre</div>
						<div class="pattern resultado-2"><div class="highlight-inv"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></div></div>
					</div>
					<div class="title-resultado">
						<div class="resultado-1">Vertical</div>
						<div class="pattern resultado-2"><div class="highlight-inv"><?php the_category(' '); ?></div></div>
					</div>
					<div class="title-resultado">
						<div class="resultado-1">Reach</div>
						<div class="pattern resultado-2"><div class="highlight-inv">134.000</div></div>
					</div>
			</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="nothing-message">
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
