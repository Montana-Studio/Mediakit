<?php get_header(); ?>
<?php get_template_part('menu'); ?>

<div class="sitio-single"> 

    <main class="page-sitio" role="main">
    <!-- section -->
        <section>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article  class="art-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                 <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

              

                <!-- Resultado mÃ©tricas -->
                <!-- 
                La estructra puede variar segÃºn el template lo necesite pero, es importante no modificar algunos tags que sonde se inyectarÃ¡n las mÃ©tricas.
                Se debe respetar los tags marcados con //No modificar id!
                En este caso fueron creados con con <div>, se puede modifcar a <p>, <h3>, o como estime conveniente pero no se debe alterar su id.
                -->
                <div class="content-sitio">

                    <div class="btn"><a href="../contact"><i class="fa fa-external-link"></i> Cotizar</a></div>

                    <div class="metrics">
                        <div id="results_metrics" class="metrica-number">
                            <ul>
                                <h3 class="bg-highlight">Social Media</h3>
                                <li>
                                    <i class="fa fa-facebook"></i>
                                    <div class="metrics-1">facebook</div>
                                    <div class="metrics-2">
                                        <div id="fb_likes" class="metrics-descriptions-1"></div>
                                        <div class="metrics-descriptions-2">Likes</div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <p class="metrics-1">Twitter</p>
                                     <div class="metrics-2">
                                        <div id="twitter_followers" class="metrics-descriptions-1"></div>
                                        <div class="metrics-descriptions-2">Followers</div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-instagram"></i>
                                    <p class="metrics-1">Instagram</p>
                                    <div class="metrics-2">
                                        <div id="instagram_followers" class="metrics-descriptions-1"></div>
                                        <div class="metrics-descriptions-2">Followers</div>
                                    </div>
                                </li>
                            </ul>

                            <ul>
                                <h3 class="bg-highlight">DESKTOP METRICS</h3>
                                <li>
                                    <i class="fa fa-eye"></i>
                                    <p class="metrics-1">SESSIONS</p>
                                    <div class="metrics-2">
                                        <div id="sessions_count" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-male"></i>
                                    <p class="metrics-1">USUARIOS</p>
                                    <div class="metrics-2">
                                        <div id="users_count" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-heart-o"></i>
                                    <p class="metrics-1">PAGES VIEWS</p>
                                    <div class="metrics-2">
                                        <div id="pageviews_count" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-laptop"></i>
                                    <p class="metrics-1">PAGEVIEWS/SESSIONS</p>
                                    <div class="metrics-2">
                                        <div id="pageviews_per_session" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <p class="metrics-1">AVG. SESSION DURATION</p>
                                    <div class="metrics-2">
                                        <div id="avg_sessions_duration" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                            </ul>

                            <ul>
                                <h3 class="bg-highlight">Mobile METRICS</h3>
                                <li>
                                    <i class="fa fa-eye"></i>
                                    <p class="metrics-1">SESSIONS</p>
                                    <div class="metrics-2">
                                        <div id="sessions_count_mobile" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-male"></i>
                                    <p class="metrics-1">USUARIOS</p>
                                    <div class="metrics-2">
                                        <div id="users_count_mobile" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-heart-o"></i>
                                    <p class="metrics-1">PAGES VIEWS</p>
                                    <div class="metrics-2">
                                        <div id="pageviews_count_mobile" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-laptop"></i>
                                    <p class="metrics-1">PAGEVIEWS/SESSIONS</p>
                                    <div class="metrics-2">
                                        <div id="pageviews_per_session_mobile" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <p class="metrics-1">AVG. SESSION DURATION</p>
                                    <div class="metrics-2">
                                        <div id="avg_sessions_duration_mobile" class="metrics-descriptions-1"></div>
                                    </div>
                                </li>
                            </ul>  

                        </div>

                        <div class="data-picker-display">
                            <div class="content-dpicker-display">
                                <h3 class="bg-highlight">FILTRAR POR FECHA</h3>
                                <!-- Datepicker -->
                                <!-- CÃ³digo donde se cargara selector de fechas-->
                                <div id="date-range" class="dp-cont">
                                    <div id="date-range-field" class="dp-calendar">
                                        <span></span>
                                        <a href="#">&#9660;</a>
                                    </div>
                                    <div id="datepicker-calendar" class="dp-desplegable"></div>
                                    <div id="actions_ga" class="dp-botonera">
                                        <div class="dp-btn"> <a href="" id="apply_ga" class="btn-datapicker">Aplicar</a></div>
                                        <div class="dp-btn"><a href="" id="cancel_ga" class="btn-datapicker">Cancelar</a></div>
                                    </div>
                                </div>
                                <!-- End Datepicker -->
                            </div>
                        </div>

                        <div class="btn-display">
                            <div class="content-display">
                                <h3 class="bg-highlight">CONTACTANOS</h3>
                                 <div class="btn display-des"><a href="../contact"><i class="fa fa-external-link"></i> Cotizar</a></div>
                            </div>
                        </div>

                        <div class="metrica-mapa">
                            <div class="map-content">
                                <ul>
                                    <h3 class="bg-highlight">MAP GLOBAL REACH</h3>
                                    <div class="img-map"><img src="<?php //the_field('imagen_mapa'); ?>"  alt=""></div>
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

        </section>
    <!-- /section -->
    </main>

</div>


<?php get_footer(); ?>

