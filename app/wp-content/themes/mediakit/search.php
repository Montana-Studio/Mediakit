<?php get_header(); ?>
<?php get_template_part('menu'); ?>

<!-- section -->
<section class="search-content">
	<div class="search-cont">
		<div class="encabezado" style="background-image:url('<?php echo $feat_image;?>') ">
			<div class="content-title">
				<h2><a class="highlight"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></a></h2>
			</div>
		</div>

		<?php get_template_part('loop-search'); ?>
		<?php get_template_part('pagination'); ?>
		
	</div>
</section>
<!-- /section -->
