<?php /*Template name: Pagina Contacto*/ ?>
<?php get_header(); ?>
<div class="nav-mobile">
	<div class="logo-mobile">
		<a href="<?php echo home_url(); ?>">
			<svg viewBox="0 0 158.459 40">
				<use xlink:href="#mobile-mediatrends"/> 
			</svg>
		</a>
	</div>
	<div id="menu-nav" class="menu-mobile"><i class="fa fa-bars"></i></div>
</div>

<main role="main">
	<!-- section -->
	<section class="page-header page-contacto">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="encabezado" style="background-image:url('<?php echo $feat_image;?>') ">
					<div class="content-title">
						<h2><a class="highlight"><?php the_title(); ?></a></h2>
					</div>
				</div>
				<div class="form-contacto-cont">
					<div class="pattern title-form"><a class="highlight-inv"><?php the_title(); ?></a></div>
					<div class="content-form"><?php the_content(); ?></div>
				</div>
				<div class="content-info">
					<div class="trama">
						<h3><a class="highlight-inv">DONDE UBICARNOS</a></h3>
						<p>Av. Italia 12345,</p>
						<p>Santiago de Chile.</p>
						<p>hola@mediatrends.cl</p> 
						<p>22 1234 567 - 22 1345678</p>   
					</div>
				</div>
			</article>
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

