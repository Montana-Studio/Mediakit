<?php get_header(); ?>

<script>
	
	jQuery(document).ready(function($){
		window.mySwipe = new Swipe(document.getElementById('slider'), {
		  startSlide: 0,
		  speed: 1000,
		  auto: 5000,
		  continuous: true,
		  disableScroll: false,
		  stopPropagation: false,
		  callback: function(index, elem) {
		  	$('.tit-index-slide').animate({
		  		bottom:-400,
		  		opacity:0
		  	});
		  },
		  transitionEnd: function(index, elem) {
		  	$('.tit-index-slide').animate({
		  		bottom:0,
		  		opacity:1
		  	}, 500);
		  }
		});
	});

</script>
<!--SLIDER CONTENT-->
<div id='slider' class='swipe swipe-all'>
	<div class='swipe-wrap'>
		<?php $query = new WP_Query('posts_per_page=3&category_name=destacado'); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		
			<div class="content-slide" style="background-image:url(<?php echo $feat_image;?>);">
				<a href="<?php echo get_permalink(); ?>">
					<article id="post-<?php the_ID(); ?>" <?php post_class('tit-index-slide'); ?>>
						<main>

							<small class="cat_date"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?> / <?php the_time('M, j'); ?></small>
							<h2><?php the_title(); ?></h2>

							<small class="view_commen"><?php echo getPostViews(get_the_ID()); ?> / <?php comments_number(); ?></small>
							
						</main>
					</article>
				</a>
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

<div class="ads_728x90_home">
	<script src="//www.googletagservices.com/tag/js/gpt.js">
	googletag.pubads().definePassback('/92947493/728x90_SOYCRACK_ALL', [728, 90]).display();
	</script>
</div>

<!--DESTACADO CONTENT-->
<ul class="content-destacado">
	
	<?php $query = new WP_Query('posts_per_page=2&category_name=destacados'); ?>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


		<li id="post-<?php the_ID(); ?>" <?php post_class('destacados'); ?>>
			<main class="post-content">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

					<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
					<?php endif; ?>

					<h2>
						<?php if (strlen($post->post_title) > 32) {
							echo substr(the_title($before = '', $after = '', FALSE), 0, 20) . '...'; } else {
							the_title();
						} ?>
					</h2>
					<small class="cat_date"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?> / <?php the_time('M, j'); ?></small>

				</a>
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<ul class="share_btns">
					<li>
						<a href="" data-type="facebook" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" data-media="<?php echo $feat_image;?>" class="prettySocial">
							<svg viewBox="0 0 32 30">
								<use xlink:href="#svg_btnfb-min" />
							</svg>
						</a>
					</li>
					<li>
						<a href="" data-type="twitter" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" class="prettySocial">
							<svg viewBox="0 0 32 30">
								<use xlink:href="#svg_btntw-min" />
							</svg>
						</a>
					</li>
				</ul>
			</main>
		</li>

	<?php endwhile;
	wp_reset_postdata();
	else: ?>
		<p>No hay post.</p>
	<?php endif; ?>

</ul>

<!--CONTENT WRAP-->
<main role="main" class="all-content">
	
	<section class="wrapper-index">

			<?php // $query = new WP_Query('posts_per_page=3'); ?>

			<?php //if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('postes'); ?>>
					<main class="post-content">
						<div class="agua-logo">
							
							<svg viewBox="0 0 227.167 46.645" class="logo_mobile-norm">
								<use xlink:href="#svg_logosc2" />
							</svg>
							
						</div>
						<div class="audiovisual">
							<?php echo get_the_content('<div class="more-hide">',FALSE,'</div>'); ?>
						</div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

					<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
					<?php endif; ?>

							<small class="cat_date"><spam class="wrap-cat_name"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?></spam> / <?php the_time('M, j'); ?></small>

							<h2><?php the_title(); ?></h2>

							<small class="view_commen"><?php echo getPostViews(get_the_ID()); ?> / <?php comments_number(); ?></small>

						</a>
						<ul class="share_btns">
							<li>
								<a href="#" data-type="facebook" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" data-media="<?php echo $feat_image;?>" class="prettySocial">
									<svg viewBox="0 0 94 30">
										<use xlink:href="#svg_btnfb" />
									</svg>
								</a>
							</li>
							<li>
								<a href="#" data-type="twitter" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" class="prettySocial">
									<svg viewBox="0 0 94 30">
										<use xlink:href="#svg_btntw" />
									</svg>
								</a>
							</li>
							<li class="wtapp-btn">
								<a href="whatsapp://send" data-text="vía:soycrack.futbol - <?php the_title_attribute(); ?>" data-href="<?php the_permalink() ?>" class="wa_btn wa_btn_m" style="display:none">Compartir</a>
							</li>
						</ul>
					</main>
				</article>

			<?php /* endwhile;
			wp_reset_postdata();
			else: ?>
				<p>No hay post.</p>
			<?php endif; */?>
			
			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<p>No hay post.</p>
				</article>
				<!-- /article -->

			<?php endif; ?>

			<?php get_template_part('pagination'); ?>

	</section>

	<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
