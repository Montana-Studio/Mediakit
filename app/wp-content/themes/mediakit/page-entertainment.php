<?php /*Template name: Pagina Entertainment*/ ?>

<?php get_header(); ?>

<?php get_template_part('menu'); ?>

	<!-- section -->
		<div class="page-categoria">
			
			<!-- LOOP -->
				<?php $query = new WP_Query('posts_per_page=10&category_name=entertainment'); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('content-loop-categoria'); ?>>

					<div class="sitio-single">
						<div class="content-single">
							<a href="<?php the_permalink()?>">

								<div class="header-destacado"><i class="fa fa-star"></i> Destacado</div>

								<div class="img-single"><?php echo the_post_thumbnail();?>
									<div class="title">
										<h2>
										<?php if (strlen($post->post_title) > 40) {
											echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . ' ... '; } else {
											the_title();
											} ?>
										</h2>
									</div>
								</div>

								<div class="pattern"><div class="highlight-inv">MONTHLY REACH 134.000</div></div>

								<div id="results_metrics" class="sitio-social">
									<ul>
										<li>
											<div class="number">134.000</div>
											<div class="bajada-num"><i class="fa fa-facebook"> Likes</i></div>
										</li>
										<li>
											<div class="number">134.000</div>
											<div id="twitter_followers" class="bajada-num"><i class="fa fa-twitter"> Follows</i></div>
										</li>
										<li>
											<div class="number">134.000</div>
											<div class="bajada-num"><i class="fa fa-instagram"> Follows</i></div>
										</li>
									</ul>
								</div>

							</a>
						</div>	

					</div>

				</article>
				<!-- LOOP -->

				<?php endwhile;

				wp_reset_postdata();

				else: ?>
				<article class="nothing-message">
					<h2>No hay post.</h2>
				<article>
				<?php endif; ?>

	</div>
	<!-- /section -->

