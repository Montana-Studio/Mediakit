<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="content-post">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="content-title">
							<h1>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h1>
							<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
						</div>
						<div class="img-post" style="background-image:url('<?php the_field('imagen_post_banner'); ?>')">
							<div class="date">
								<time><?php echo str_replace('<i class="fa fa-calendar"></i>','<br/>',the_date('d/m')); ?></time>
								<!--<time> <?php echo get_the_date('d F'); ?> </time>
								-->
							</div>
						</div>
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>

						<div class="content-text">
							<?php the_content();?>

							<div class="content-author">
								<div class="img-author">
									<img src="<?php the_field('imagen_post_banner'); ?>" alt="">
								</div>

								<div class="name-author">
									<?php the_author_posts_link(); ?>
								</div>
								
							</div>
						</div>
				</article>

			<?php endwhile; ?>

			<?php else: ?>
				<article>
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</article>
			<?php endif; ?>
	</section>
	</main>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
