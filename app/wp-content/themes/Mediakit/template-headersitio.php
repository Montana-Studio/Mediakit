<!-- header -->
<header class="page-header page-header-sitio">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article class="single-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class="content-header">
			<div class="fullscreen background parallax encabezado" style="background-image:url('<?php echo $feat_image;?>');" data-img-width="100%" data-img-height="350" data-diff="100">
			    <div class="content-a">
			        <div class="content-b">
			           	<div class="content-float">
							<div class="logo-sitio"><div class="img-content"><img src="<?php the_field('imagen_logo_sitio'); ?>" alt=""></div></div>
							 <div class="content-group">
	                            <div class="bajada bg-highlight"><?php the_content(); ?></div>
	                            <div class="btn-left"><div class="content-pattern bg-highlight"><div class="highlight-inv">MONTHLY REACH <?php the_field('reach_sitio'); ?></div></div></div>
	                            <div class="btn-right"><div class="btn"><a href="<?php the_field('sitio_web'); ?>" target="_blank"><i class="fa fa-external-link"></i> ver sitio</a></div></div>   
	                        </div>
						</div>
			        </div>
			    </div>
			</div>
		</div>
	</article>
	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>
		
</header>  