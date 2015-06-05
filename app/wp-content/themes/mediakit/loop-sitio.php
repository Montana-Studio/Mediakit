<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<section class="page-header page-sitio">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<div class="encabezado">
			<div class="content-header">
				<div class="logo-sitio"><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/logo_chicfit.png" alt=""></a></div>
				<div class="pattern"><a href="#" class="highlight-inv">MONTHLY REACH 134.000</a></div>
				<div class="btn"><a href="#"><i class="fa fa-external-link"></i> ver sitio</a></div>
			</div>
			<div class="content-sitio">
				<div class="btn"><a href="#"><i class="fa fa-external-link"></i>Cotizar</a></div>
				<div id="results_metrics" class="metrics">
					<ul>
						<h3><a class="highlight" href="">Social Media</a></h3>
						<li>
							<i class="fa fa-facebook"></i>
							<p class="metrics-1">facebook</p>
							<p id="fb_likes" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-twitter"></i>
							<p class="metrics-1">Twitter</p>
							<p id="twitter_followers" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-instagram"></i>
							<p class="metrics-1">Instagram</p>
							<p id="instagram_followers" class="metrics-2"></p>
						</li>
					</ul>
					<ul>
						<h3><a class="highlight" href="">DESKTOP METRICS</a></h3>
						<li>
							<i class="fa fa-eye"></i>
							<p class="metrics-1">SESSIONS</p>
							<p id="sessions_count" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-male"></i>
							<p class="metrics-1">USUARIOS</p>
							<p id="users_count" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-heart-o"></i>
							<p class="metrics-1">PAGES VIEWS</p>
							<p id="pageviews_count" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-laptop"></i>
							<p class="metrics-1">PAGEVIEWS/SESSIONS</p>
							<p id="pageviews_per_session" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-laptop"></i>
							<p class="metrics-1">AVG. SESSION DURATION</p>
							<p id="avg_sessions_duration" class="metrics-2"></p>
						</li>
					</ul>
					<ul>
						<h3><a class="highlight" href="">Mobile METRICS</a></h3>
						<li>
							<i class="fa fa-eye"></i>
							<p class="metrics-1">SESSIONS</p>
							<p id="sessions_count_mobile"class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-male"></i>
							<p class="metrics-1">USUARIOS</p>
							<p id="users_count_mobile" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-heart-o"></i>
							<p class="metrics-1">PAGES VIEWS</p>
							<p id="pageviews_count_mobile" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-laptop"></i>
							<p class="metrics-1">PAGEVIEWS/SESSIONS</p>
							<p id="pageviews_per_session_mobile" class="metrics-2"></p>
						</li>
						<li>
							<i class="fa fa-laptop"></i>
							<p class="metrics-1">AVG. SESSION DURATION</p>
							<p id="avg_sessions_duration_mobile" class="metrics-2"></p>
						</li>
					</ul>
					<ul>
						<h3><a class="highlight" href="">MAP GLOBAL REACH</a></h3>
						<div class="img-map"><img src="<?php echo get_template_directory_uri()?>/img/mapa_vectorial.jpg" alt=""></div>
						
					</ul>	
				</div>
			</div>
		</div>


		

	</article>
	<!-- /article -->
</section>	

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
