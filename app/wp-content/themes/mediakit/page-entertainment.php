<?php /*Template name: Pagina Entertainment*/ ?>

<div class="nav-mobile">
	<div class="logo-mobile">
		<a href="<?php echo home_url(); ?>">
			<svg viewBox="0 0 158.459 40">
				<use xlink:href="#mobile-mediatrends"/> 
			</svg>
		</a>
	</div>
	<div id="menu-nav" onclick="toggleContent()" class="menu-mobile"><i class="fa fa-bars"></i></div>
</div>

<?php get_header(); ?>

<?php get_template_part('menu'); ?>

	<!-- section -->
	<div class="page-categoria">
			
			<!-- LOOP -->
				<?php $query = new WP_Query('posts_per_page=10&category_name=entertainment'); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<article class="content-loop-categoria" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<article class="content-loop-categoria grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="sitio-single">
						<div class="content-single">

							<div class="header-destacado"><a href="#"><i class="fa fa-star"></i> Destacado</a></div>

							<div class="img-single"><?php echo the_post_thumbnail();?>
								<div class="title">
									<a class="highlight" href="<?php the_permalink()?>">
											<?php if (strlen($post->post_title) > 40) {
												echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . ' ... '; } else {
												the_title();
												} ?>
									</a>
								</div>
							</div>

							<div class="pattern"><a href="#" class="highlight-inv">MONTHLY REACH 134.000</a></div>

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

