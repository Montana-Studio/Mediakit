<div class="sitio-single"> 

<?php get_header(); ?>

<?php get_template_part('menu'); ?>

    <main class="page-sitio" role="main"> 
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <!-- article -->
                <article  class="art-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <div class="content-header">
                        <div class="logo-sitio"><div class="img-content"><img src="<?php the_field('imagen_logo_sitio'); ?>" alt=""></div></div>
                        <div class="content-group">
                            <div class="bajada bg-highlight"><?php the_content(); ?></div>
                            <div class="btn-left"><div class="pattern"><div class="highlight-inv">MONTHLY REACH 34.000</div></div></div>
                            <div class="btn-right"><div class="btn"><a href="#"><i class="fa fa-external-link"></i> ver sitio</a></div></div>   
                        </div>
                        
                    </div>

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
                    <!--Resultado mÃ©tricas -->
                    <!-- 
                    La estructra puede variar segÃºn el template lo necesite pero, es importante no modificar algunos tags que sonde se inyectarÃ¡n las mÃ©tricas.
                    Se debe respetar los tags marcados con //No modificar id!
                    En este caso fueron creados con con <div>, se puede modifcar a <p>, <h3>, o como estime conveniente pero no se debe alterar su id.
                    -->
                    <div class="content-sitio">
                        <a class="btn"><a href="page-contacto.php"><i class="fa fa-external-link"></i> Cotizar</a></div>

                        <div class="metrics">
                            <div id="results_metrics" class="metrica-number">
                                <ul>
                                    <h3 class="bg-highlight">Social Media</h3>
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
                                    <h3 class="bg-highlight">DESKTOP METRICS</h3>
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
                                    <h3 class="bg-highlight">Mobile METRICS</h3>
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
                            </div>


                             <div class="btn-display">
                                <div class="content-display">
                                    <h3 class="bg-highlight">CONTACTANOS</h3>
                                     <div class="btn display-des"><a href="page-contacto.php"><i class="fa fa-external-link"></i> Cotizar</a></div>
                                </div>
                            </div>

                            <div class="metrica-mapa">
                                <div class="map-content">
                                    <ul>
                                        <h3 class="bg-highlight">MAP GLOBAL REACH</h3>
                                        <div class="img-map"><img src="<?php the_field('imagen_mapa'); ?>"  alt=""></div>
                                    </ul>     
                                </div>
                            </div>
                            
                        </div>
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

        <!-- /section -->
    </main>    

</div>

