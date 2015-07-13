<?php /*Template name: Pagina Art*/ ?>

<?php get_header(); ?>

<?php get_template_part('menu'); ?>

	<!-- section -->
		<div class="page-categoria">
			
			<!-- LOOP -->
				<?php $query = new WP_Query('posts_per_page=10&category_name=art'); ?>

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

								<div class="content-pattern bg-highlight-inv"><div class="highlight-inv">MONTHLY REACH <?php the_field('reach_sitio'); ?></div></div>

								<div id="results_metrics" class="sitio-social">
									<ul>
										<li>
											<div class="number" id="fb_likes"></div>
											<div class="bajada-num"><i class="fa fa-facebook"> Likes</i></div>
										</li>
										<li>
											<div class="number" id="twitter_followers"></div>
											<div class="bajada-num"><i class="fa fa-twitter"> Follows</i></div>
										</li>
										<li>
											<div class="number" id="instagram_followers"></div>
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
					<h2>Lo siento, nada para mostrar.</h2>
					<p>Pronto tendremos nuevo contenido disponible.</p>
					<div class="logotipe-message">
						<svg viewBox="0 0 792 656.856">
							<use xlink:href="#mediatrends-logo"/> 
						</svg>
					</div>
				<article>
				<?php endif; ?>

	</div>
	<!-- /section -->

