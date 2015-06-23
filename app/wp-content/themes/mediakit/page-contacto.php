<?php /*Template name: Pagina Contacto*/ ?>
	<?php get_header(); ?>

	<div class="contact-content">

	<?php get_template_part('menu'); ?>

	<!-- section -->
	<section class="page-contacto">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="form-contacto-cont">
					<div class="pattern title-form"><a class="highlight-inv"><?php the_title(); ?></a></div>
					<div class="content-form"><?php the_content(); ?></div>
				</div>
				<div class="content-info">
					<div class="trama">
						<h3><a class="highlight-inv">DONDE UBICARNOS</a></h3>
						<p>Av. Italia 12345,</p>
						<p>Santiago de Chile.</p>
						<p>hola@mediatrends.cl</p> 
						<p>22 1234 567 - 22 1345678</p>   
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


