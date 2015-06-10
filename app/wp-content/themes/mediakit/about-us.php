<?php /*Template name: Pagina About Us*/ ?>
<?php get_header(); ?>
<div class="nav-mobile">
	<div class="logo-mobile">
		<a href="<?php echo home_url(); ?>">
			<svg viewBox="0 0 158.459 40">
				<use xlink:href="#mobile-mediatrends"/> 
			</svg>
		</a>
	</div>
	<div id="menu-nav" class="menu-mobile"><i class="fa fa-bars"></i></div>
</div>

<?php get_template_part('menu'); ?>

<main role="main">
	<!-- section -->
	<section class="page-header page-aboutus">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="encabezado" style="background-image:url('<?php echo $feat_image;?>') ">
					<div class="content-title">
						<div class="logo-mediatrends">
							<a href="<?php echo home_url(); ?>">
								<svg viewBox="0 0 792 656.856">
									<use xlink:href="#mediatrends-logo"/> 
								</svg>
							</a>
						</div>
						<h2><a class="highlight" href=""><?php the_title(); ?></a></h2>
						<div class="bajada"><?php the_content(); ?></div>
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

			
			<!-- LOOP -->
			
				<?php $query = new WP_Query('posts_per_page=10&category_name=sport'); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<article class="content-loop-categoria" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
					<h2>No hay post.</h2>
				<?php endif; ?>

	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>

