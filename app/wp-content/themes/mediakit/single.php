<?php /*Template name: Pagina Sitio*/ ?>
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

<section class="page-header page-sitio">
	<main role="main">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="encabezado" style="background-image:url('<?php echo $feat_image;?>') ">
                    <div class="content-header">
                        <div class="logo-sitio"><a href="#"><img src="<?php the_field('imagen_logo_sitio'); ?>" alt=""></a></div>
                        <div class="pattern"><a href="#" class="highlight-inv">MONTHLY REACH 134.000</a></div>
                        <div class="btn"><a href="#"><i class="fa fa-external-link"></i> ver sitio</a></div>
                    </div>
                </div>

                <!-- Resultado mÃ©tricas -->
                <!-- 
                La estructra puede variar segÃºn el template lo necesite pero, es importante no modificar algunos tags que sonde se inyectarÃ¡n las mÃ©tricas.
                Se debe respetar los tags marcados con //No modificar id!
                En este caso fueron creados con con <div>, se puede modifcar a <p>, <h3>, o como estime conveniente pero no se debe alterar su id.
                -->
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
                                <i class="fa fa-clock-o"></i>
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
                                <i class="fa fa-clock-o"></i>
                                <p class="metrics-1">AVG. SESSION DURATION</p>
                                <p id="avg_sessions_duration_mobile" class="metrics-2"></p>
                            </li>
                        </ul>
                        <ul>
                            <h3><a class="highlight" href="">MAP GLOBAL REACH</a></h3>
                            <div class="img-map"><img src="<?php the_field('imagen_mapa'); ?>"  alt=""></div>
                            
                        </ul>   
                    </div>
                </div>    
                <!-- Fin Resultado mÃ©tricas -->

                <?php the_content(); // Dynamic Content ?>

            </article>
        <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<!-- /section -->
	</main>
</section>
