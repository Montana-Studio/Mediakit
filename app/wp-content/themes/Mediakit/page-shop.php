<?php /*Template name: Pagina Shop*/ ?>
<?php 
    
    if(is_cart()||is_checkout()||is_myaccount){
    	get_header('shop');
        echo '
            <script>
                jQuery(document).ready(function($){
                    $("main.content").addClass("no-sidebar");
                });
            </script>
        ';
    }else{
        get_sidebar('shop');
    };
?>
    
<!--page.php-->
	<main class="content page-content" role="main">
		<!-- section -->
		<section class="secc-cont">
		<?php if(!is_myaccount){ ?>
			<h1>
				<span><?php the_title(); ?></span>
				<div class="line"></div>
			</h1>
		<?php } ?>
			
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php 
					if(is_myaccount){
				?>
					<?php 
						if (has_post_thumbnail()){ 
							$domsxe = simplexml_load_string(get_the_post_thumbnail());
							$thumbnailsrc = $domsxe->attributes()->src;
						}
					?>
					<div class="imagen-cont" style="background-image: url('<?php echo $thumbnailsrc ?>');"></div>
					<div class="parrafos">
					
						<h2>
							<span><?php the_title(); ?></span>
							<div class="line"></div>
						</h2>
				<?php 
					}
				?>
				
					<?php the_content(); ?>
				<?php 
					if(is_myaccount){
						echo '<a class="btn" href="shop">entrar al sitio</a>
							</div>';
					} ?>
				<?php //edit_post_link(); ?>

			</article>
			<!-- /article -->

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
<?php 
    get_footer();
?>
