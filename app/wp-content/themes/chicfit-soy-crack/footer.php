			</div>
		<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-footer">

					<div class="first-box">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<svg viewBox="0 0 300 95">
									<use xlink:href="#svg_logo"/> 
								</svg>
							</a>
						</div>
						<nav class="nav">
							<?php html5blank_nav(); ?>
						</nav>
					</div>

					<div class="second-box">
						<div class="newsletter">
							<h4>Newsletter</h4>
							<input type="search" name="s" placeholder="<?php _e( '', 'html5blank' ); ?>"><a class="send" href="">Enviar</a>
						</div>
					</div>
					
					<div class="third-box">
						<div class="siguenos">
							<h4>Siguenos</h4>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
						</div>
					</div>

				</div>
			</footer>
			<!-- /footer -->
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.js"></script>
		<?php wp_footer(); ?>
		
		

	</body>
</html>
