<!-- header -->
<header class="page-header page-aboutus-header">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article class="single-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class="content-header">
		</div>
	</article>
	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>
		
</header>   