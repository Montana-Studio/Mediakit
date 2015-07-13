<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a class="search-loop" href="<?php the_permalink()?>">
				
					<div class="img-search">
						<div class="img-content-search">
							<img src="<?php the_field('imagen_logo_sitio'); ?>" alt="">
						</div>
					</div>
					<div class="title-resultado">
						<div class="resultado-1">Nombre</div>
						<div class="content-pattern bg-highlight-inv resultado-2"><div class="highlight-inv"><?php the_title(); ?></div></div>
					</div>
					<div class="title-resultado">
						<div class="resultado-1">Vertical</div>
						<div class="content-pattern bg-highlight-inv resultado-2"><div class="highlight-inv"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacado') {echo $category->name ;}} ?></div></div>
					</div>
					<div class="title-resultado">
						<div class="resultado-1">Reach</div>
						<div class="content-pattern bg-highlight-inv resultado-2"><div class="highlight-inv">134.000</div></div>
					</div>
			</a>
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
