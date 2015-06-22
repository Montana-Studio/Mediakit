<?php /*Template name: Pagina Categoria*/ ?>
<?php get_header(); ?>
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

<?php get_template_part('menu'); ?>

<main role="main">
	<!-- section -->
	<section class="page-header page-categoria">

		<div class="encabezado">
			<div class="content-title">
				<h2><a class="highlight" href=""><?php the_title(); ?></a></h2>
				<p class="bajada">We talk about authenticity quite a bit... It's crucial to the Millennial audience. Complex does a good job wrapping content that's great and impactful from an advertiser standpoint.</p>
			</div>
		</div>

		

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>


			<br class="clear">
			<div class="sitio-single">
				<div class="content-single">
					<div class="header-destacado"><a href="#"><i class="fa fa-star"></i> Destacado</a></div>
					<div class="img-single"><img src="../app/wp-content/themes/mediakit/img/sport.jpg" alt=""><div class="title"><a class="highlight" href="#">Chilerunning</a></div></div>
					<div class="pattern"><a href="#" class="highlight-inv">MONTHLY REACH 134.000</a></div>
					<div class="sitio-social">
						<ul>
							<li>
								<a class="number">134.000</a>
								<a href="#" class="bajada-num"><i class="fa fa-facebook"> Likes</a></i>
							</li>
							<li>
								<a class="number">134.000</a>
								<a href="#" class="bajada-num"><i class="fa fa-twitter"> Follows</a></i>
							</li>
							<li>
								<a class="number">134.000</a>
								<a href="#" class="bajada-num"><i class="fa fa-instagram"> Follows</a></i>
							</li>
						</ul>
					</div>
				</div>	
			</div>
			

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

