<?php /*Template name: Pagina Contacto*/ ?>
	<?php get_header(); ?>

	<div class="contact-content">

	<?php get_template_part('menu'); ?>

	<!-- section -->
	<section class="page-contacto">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="form-contacto-cont">
					<div class="cont-pattern-trama title-form"><a class="bg-highlight-inv"><?php the_title(); ?></a></div>
					<div class="content-form"><?php the_content(); ?></div>
				</div>
				<div class="content-info">
					<div class="trama">
						<h3 class="bg-highlight-inv">DONDE UBICARNOS</h3>
						<p>Av. Italia 1439, Of 302</p>
						<p>Santiago de Chile.</p>
						<p>info@mediatrends.cl</p> 
						<p>+56 02 2 205 91 91</p>   
					</div>
				</div>
			</article>
			<?php endwhile; ?>

			<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
			<?php endif; ?>
		
	</section>
	<!-- /section -->	

</div>


