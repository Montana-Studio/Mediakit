			</div>
		<!-- /wrapper -->

		<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="box">
					<div class="first_box">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<svg viewBox="0 0 300 95">
									<use xlink:href="#svg_logo"/> 
								</svg>
							</a>
						</div>
						<div class="newsletter">
							<h4>Newsletter</h4>
							<input type="search" name="s" placeholder="<?php _e( '', 'html5blank' ); ?>"><a class="send" href="">Enviar</a>
						</div>
					</div>
					<div class="second_box">
						<h4>Chicfit Daily</h4>
						<nav class="nav">
							<?php html5blank_nav(); ?>
						</nav>
					</div>
					<div class="third_box">
						<div class="siguenos">
							<h4>Siguenos</h4>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
						</div>
						<div class="contactanos">
							<h4>Contactanos</h4>
							<li><a href="">Contacto Editorial<i class="fa fa-envelope-o"></i></a></li>
							<li><a href="">Contacto Publitario<i class="fa fa-envelope-o"></i></a></li>
						</div>
					</div>
				</div>	
			</footer>
			<!-- /footer -->
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.js"></script>
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		
		
	</body>
</html>
