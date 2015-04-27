			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<div class="search-content oculto">
			<div class="close">
				<svg viewBox="0 0 24.707 24.707">
					<use xlink:href="#svg_icon_cerrar2" />
				</svg>
			</div>
			
			<?php get_template_part('searchform'); ?>

		</div>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.js"></script>
		<?php wp_footer(); ?>
		
		

	</body>
</html>
