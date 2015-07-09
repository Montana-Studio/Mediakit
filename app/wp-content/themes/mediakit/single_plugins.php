<?php get_header(); ?> 

	<main role="main">
	<!-- section -->
	<section>

  	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  		<!-- article -->
  		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  			<!-- post thumbnail -->
  			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
  				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
  				</a>
  			<?php endif; ?>
  			<!-- /post thumbnail -->

  			<!-- post title -->
  			<h1>
  				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
  			</h1>
  			<!-- /post title -->

  			<!-- Datepicker -->
        <!-- CÃ³digo donde se cargara selector de fechas-->
        <div id="date-range">
          <div id="date-range-field">
            <span></span>
            <a href="#">&#9660;</a>
          </div>
          <div id="datepicker-calendar"></div>
          <div id="actions_ga">
            <a href="" id="apply_ga">Aplicar</a>
            <a href="" id="cancel_ga">Cancelar</a>
          </div>
        </div>
        <!-- End Datepicker -->

        <!-- Resultado mÃ©tricas -->
        <!-- 
        La estructra puede variar segÃºn el template lo necesite pero, es importante no modificar algunos tags que sonde se inyectarÃ¡n las mÃ©tricas.
        Se debe respetar los tags marcados con //No modificar id!
        En este caso fueron creados con con <div>, se puede modifcar a <p>, <h3>, o como estime conveniente pero no se debe alterar su id.
        -->
        <div id="results_metrics">
          <p>
            Desktop
            <ul>
              <li>
                SESSIONS
                <div id="sessions_count"></div><!-- //No modificar id! -->
              </li>
              <li>
                USUARIOS
                <div id="users_count"></div><!-- //No modificar id! -->
              </li>
              <li>
                PAGES VIEWS
                <div id="pageviews_count"></div><!-- //No modificar id! -->
              </li>
              <li>
                PAGEVIEWS/SESSIONS
                <div id="pageviews_per_session"></div><!-- //No modificar id! -->
              </li>
              <li>
                AVG. SESSION DURATION
                <div id="avg_sessions_duration"></div><!-- //No modificar id! -->
              </li>
            </ul>
          </p>
          <p>
            Mobile
            <ul>
              <li>
                SESSIONS
                <div id="sessions_count_mobile"></div><!-- //No modificar id! -->
              </li>
              <li>
                USUARIOS
                <div id="users_count_mobile"></div><!-- //No modificar id! -->
              </li>
              <li>
                PAGES VIEWS
                <div id="pageviews_count_mobile"></div><!-- //No modificar id! -->
              </li>
              <li>
                PAGEVIEWS/SESSIONS
                <div id="pageviews_per_session_mobile"></div><!-- //No modificar id! -->
              </li>
              <li>
                AVG. SESSION DURATION
                <div id="avg_sessions_duration_mobile"></div><!-- //No modificar id! -->
              </li>
            </ul>
          </p>
          <p>
            Social Media
            <ul>
              <li>
                Twitter Follows
                <div id="twitter_followers"></div><!-- //No modificar id! -->
              </li>
              <li>
                Facebook Likes
                <div id="fb_likes"></div><!-- //No modificar id! -->
              </li>
              <li>
                Instagram Follows
                <div id="instagram_followers"></div><!-- //No modificar id! -->
              </li>
            </ul>
          </p>
        </div>
        <!-- Fin Resultado mÃ©tricas -->

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

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
