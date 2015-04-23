<div class="content-loop-home">
	
	<div id="container" class="container-principal">
		<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts('posts_per_page=7&paged=' . $paged);

			?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="item-principal" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="social">
						<li><i class="fa fa-facebook"></i></li>
						<li><i class="fa fa-twitter"></i></li>
					</div>
					<div class="principal-post" style="background-image:url('<?php the_field('imagen_post_banner'); ?>')">
						<a href="<?php the_permalink()?>">
							<h2><?php the_title(); ?></h2>
							<div class="date"><p>11 de abril</p></div>
						</a>
					</div>
				</article>



			<?php endwhile;
			wp_reset_postdata();
			else: ?>
				<p>No hay post.</p>
			<?php endif; ?>

				<div class="paginador" style="clear:both;">
					<?php get_template_part('pagination'); ?>
				</div>
	</div>

</div>