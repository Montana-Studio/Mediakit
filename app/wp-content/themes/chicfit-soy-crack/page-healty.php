<?php /*Template name: Healty */ ?>

<?php get_header(); ?>



<!-- LOOP DESTACADOS -->
<div class="destacados destaca-mobile">

	<?php $query = new WP_Query('posts_per_page=2&category_name=destacado'); ?>

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
<!-- / LOOP DESTACADOS -->


<!--CONTENT WRAP -->ç


<!-- LOOP MÁS RECIENTES -->
<div class="content-loop-home">
	<div id="container" class="container-principal">

			<div id="reciente" class="item-principal">
				<div class="bg-color">
					<h2>LO MAS RECIENTE</h2>
					<nav class="tags">
						<?php html5blank_nav(); ?>
					</nav>	
				</div>			
			</div>

			<?php //if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article class="item-principal" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="bg-color-none">
					<div class="social">
						<li><i class="fa fa-facebook"></i></li>
						<li><i class="fa fa-twitter"></i></li>
					</div>
					<div class="principal-post" style="background-image:url('<?php the_field('imagen_post_banner'); ?>')">
						<a href="<?php the_permalink()?>">
							<h2><?php if (strlen($post->post_title) > 41) {
								echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . ' ... '; } else {
								the_title();
								} ?></h2>
							<div class="date"><p>11 de abril</p></div>
						</a>
					</div>
				</div>
			</article>

			<?php /* endwhile;
			wp_reset_postdata();
			else: ?>
				<p>No hay post.</p>
			<?php endif; */?>
			
			<?php endwhile; ?>

			<?php else: ?>

				 <!-- article -->
				<article>
					<h2>No hay post.</h2>
				</article>
				<!-- /article -->

			<?php endif; ?>

			<div class="item-principal paginador">
				<div class="bg-color">
					<h2>VER MÁS</h2>
					<div class="pages">
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>

	</div>
</div>
<!-- /LOOP MÁS RECIENTES -->


<?php get_footer(); ?>