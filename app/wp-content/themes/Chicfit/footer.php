			</div>
		<!-- /wrapper -->

		<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="content">
					<div class="first_box">
						<div class="newsletter">
							<h4 class="titulo">NEWSLETTER</h4>
							<input type="text"><a href="#">Enviar</a>
						</div>
						<div class="news-logo">
							<a href="<?php echo home_url(); ?>">
								<svg viewBox="0 0 300 95">
									<use xlink:href="#svg_logo"/> 
								</svg>
							</a>
						</div>
					</div>
					<div class="second_box">
						<h4>CHICFIT DAILY</h4>
						<div class="footer-nav">
							<?php html5blank_nav(); ?>
						</div>
						
					</div>
					<div class="third_box">
						<h4>SIGUENOS</h4>
							<div class="social-footer">
								<li><i class="fa fa-facebook"></i></li>
								<li><i class="fa fa-twitter"></i></li>
								<li><i class="fa fa-instagram"></i></li>
							</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->

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

		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.js"></script>

	</body>
</html>
