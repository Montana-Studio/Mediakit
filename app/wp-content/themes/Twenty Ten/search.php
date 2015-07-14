<?php get_header(); ?>
<?php get_template_part('menu'); ?>

<!-- section -->

<section class="search-content mm"> 
	<div class="content-title">
		<h2 class="highlight" style="display:table;"><?php echo sprintf( __( '<span>%s</span> Resultado para ', 'html5blank' ), $wp_query->found_posts ); ?></h2>
		<p><?php echo get_search_query(); ?></p>
	</div>
	<div class="search-cont">
		<?php get_template_part('loop-search'); ?>
		<?php get_template_part('pagination'); ?>
	</div>
</section>
<!-- /section -->
