<style>
/* Swipe 2 required styles 
.swipe {
  overflow: hidden;
  visibility: hidden;
  position: relative;
  width:100%;
  height: 450px;
}
.swipe-wrap {
  overflow: hidden;
  position: relative;
}*/
.swipe-wrap > div {
  float:left;
  width:100%;
  position: relative;
}
/* END required styles */
</style>
<div id='slider' class='swipe'>
	<div class='swipe-wrap'>
		<?php $query = new WP_Query('posts_per_page=3&category_name=destacado'); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class="content-slide" style="background-image:url(<?php the_field('imagen_post_banner'); ?>);">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<main>
						<h1><?php the_title(); ?></h1>
					</main>
				</article>
			</div>
			<?php endwhile;
			wp_reset_postdata();
			else: ?>
			<p>No hay post.</p>
		<?php endif; ?>
	</div>
	<div class="btn_prev" onclick='mySwipe.prev()'><i class="fa fa-chevron-left"></i></div>
	<div class="btn_next" onclick='mySwipe.next()'><i class="fa fa-chevron-right"></i></div>
</div>