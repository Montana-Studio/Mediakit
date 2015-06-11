<?php
/**
 * Template for displaying Tag Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
/*
 * Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
<<<<<<< HEAD
get_template_part( 'loop', 'tag' );
=======
 get_template_part( 'loop', 'tag' );
>>>>>>> f8417fafd5bf20d329bf2e3402fca16fd839cf1f
?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
