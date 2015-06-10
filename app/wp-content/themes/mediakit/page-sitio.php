<?php /*Template name: Pagina Sitio*/ ?>
x
<?php get_header(); ?>

<div class="nav-mobile">
	<div class="logo-mobile">
		<a href="<?php echo home_url(); ?>">
			<svg viewBox="0 0 158.459 40">
				<use xlink:href="#mobile-mediatrends"/> 
			</svg>
		</a>
	</div>
	<div class="menu-mobile"><i class="fa fa-bars"></i></div>
</div>

<?php get_template_part('menu'); ?>
 
<main role="main">
	<!-- section -->
	<section class="page-header page-sitio">

		<div class="encabezado">
			<div class="content-header">
				<div class="logo-sitio"><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/logo_chicfit.png" alt=""></a></div>
				<div class="pattern"><a href="#" class="highlight-inv">MONTHLY REACH 134.000</a></div>
				<div class="btn"><a href="#"><i class="fa fa-external-link"></i> ver sitio</a></div>
			</div>
		</div>
		<div class="content-sitio">
			<div class="btn"><a href="#"><i class="fa fa-external-link"></i> Cotizar</a></div>
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
			
		

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>


			<br class="clear">
			
			

		</article>
		<!-- /article -->

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
</main>

