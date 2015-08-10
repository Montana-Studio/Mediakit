<?php /*Template name: Pagina Specs*/ ?>   

<?php get_header(); ?>

<?php get_template_part('menu'); ?>

	<!-- section -->
		<div class="page-specs">
			
			<div class="content-specs">

				<section class="section-specs">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<div class="acordeon">
								<div class="title-acor" id="icon-acor1">
									<h2><?php the_field('primer_titulo'); ?></h2>
									<div class="icon-title"><i class="fa fa-plus"></i></div> 
								</div>
								<div class="content-acor" id="content-acor1">
									<div class="acor-half">
										<h3>INFORMACIÓN:</h3>
										<div class="campo-txt"><?php the_field('primera_informacion'); ?></div>
										<h3>ESPECIFICACIONES:</h3>
										<div class="campo-txt"><?php the_field('primera_especificacion'); ?></div>
									</div>
									<div class="acor-half">
										<h3>ADS:</h3>
										<div class="img-acor"><img src="<?php the_field('primera_imagen'); ?>" alt=""></div>
									</div>
									<div class="clear" style="height:5px;"></div>
								</div>
							</div>

							<div class="acordeon">
								<div class="title-acor" id="icon-acor2">
									<h2><?php the_field('segundo_titulo'); ?></h2>
									<div class="icon-title"><i class="fa fa-plus"></i></div> 
								</div>
								<div class="content-acor" id="content-acor2">
									<div class="acor-half">
										<h3>INFORMACIÓN:</h3>
										<div class="campo-txt"><?php the_field('segunda_informacion'); ?></div>
										<h3>ESPECIFICACIONES:</h3>
										<div class="campo-txt"><?php the_field('segunda_especificacion'); ?></div>
									</div>
									<div class="acor-half">
										<h3>ADS:</h3>
										<div class="img-acor"><img src="<?php the_field('segunda_imagen'); ?>" alt=""></div>
									</div>
									<div class="clear" style="height:5px;"></div>
								</div>
							</div>

							<div class="acordeon">
								<div class="title-acor" id="icon-acor3">
									<h2><?php the_field('tercer_titulo'); ?></h2>
									<div class="icon-title"><i class="fa fa-plus"></i></div> 
								</div>
								<div class="content-acor" id="content-acor3">
									<div class="acor-half">
										<h3>INFORMACIÓN:</h3>
										<div class="campo-txt"><?php the_field('tercera_informacion'); ?></div>
										<h3>ESPECIFICACIONES:</h3>
										<div class="campo-txt"><?php the_field('tercera_descripcion'); ?></div>
									</div>
									<div class="acor-half">
										<h3>ADS:</h3>
										<div class="img-acor"><img src="<?php the_field('tercera_imagen'); ?>" alt=""></div>
									</div>
									<div class="clear" style="height:5px;"></div>
								</div>
							</div>

							<div class="acordeon">
								<div class="title-acor" id="icon-acor4">
									<h2><?php the_field('cuarto_titulo'); ?></h2>
									<div class="icon-title"><i class="fa fa-plus"></i></div> 
								</div>
								<div class="content-acor" id="content-acor4">
									<div class="acor-half">
										<h3>INFORMACIÓN:</h3>
										<div class="campo-txt"><?php the_field('cuarta_informacion'); ?></div>
									</div>
									<div class="acor-half">
										<h3>SERVERS:</h3>
										<div class="img-acor"><img src="<?php the_field('cuarta_imagen'); ?>" alt=""></div>
									</div>
									<div class="clear" style="height:5px;"></div>
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

			</div>

		</div>