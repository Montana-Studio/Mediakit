<div class="content-loop-home">
	
	<div id="container" class="container-principal">
			<div id="reciente" class="item-principal">
					<h2>LO MAS RECIENTE</h2>
					<nav class="tags">
							<?php html5blank_nav(); ?>
					</nav>			
			</div>

<?php 

  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

  $query_args = array(
      'post_type' => 'post',
      'category_name' => 'destacado',
      'posts_per_page' => 7,
      'paged' => $paged,
      'page' => $paged
    );

  $the_query = new WP_Query( $query_args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
    <?php endwhile; ?>
    <!-- end of the loop -->

	<div class="item-principal paginador">
		<h2>VER MÁS</h2>
		<div class="pages">
			 <?php
	      if (function_exists(custom_pagination)) {
	        custom_pagination($the_query->max_num_pages,"",$paged);
	      }
	    ?>
	    </div>
		
	</div>
    <!-- pagination here -->
   

  <?php wp_reset_postdata(); ?>

  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


			
	</div>

</div>