<?php /*Template name: Pagina Specs*/ ?>

<?php get_header(); ?>

<?php get_template_part('menu'); ?>

<main role="main">
	<!-- section -->
	<section class="page-categoria">
			
			<!-- LOOP -->
			
				<?php $query = new WP_Query('posts_per_page=10&category_name=music'); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<article class="content-specs" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<article class="nothing-message">
					<h2>Lo siento, nada para mostrar.</h2>
					<p>Pronto tendremos nuevo contenido disponible.</p>
					<div class="logotipe-message">
						<svg viewBox="0 0 792 656.856">
							<use xlink:href="#mediatrends-logo"/> 
						</svg>
					</div>
				<article>
				<?php endif; ?>

	</section>
	<!-- /section -->
</main>

