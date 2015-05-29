			
				<div class="push"></div>
			</div>


		<!-- /wrapper -->
			
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="cont-feedinstaram">
					<h2><i class="fa fa-instagram"></i> INSTAGRAM <span>CHICFIT</span></h2>
					<marquee behavior="scroll" scrollamount="1" direction="left" width="100%" speed="10000">
						<div id="instafeed" style="height:200px;"></div>
					</marquee>
				</div>

				<div class="footer-content">
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
								<ul>
									<li><a href="https://www.facebook.com/chicfitdaily"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/chicfitdaily"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://instagram.com/chicfitdaily/"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="four-box">
							<ul>
								<li><a href="mailto:alvaro@mediatrends.cl"><i class="fa fa-envelope-o"></i> CONTACTO PUBLICITARIO</a></li>
								<li><a href="mailto:chicfitdaily@gmail.com"><i class="fa fa-envelope-o"></i> CONTACTO EDITORIAL</a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</footer>
    
			<!-- /footer -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.marquee.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.touchSwipe.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script>
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btn-activated';

				if( classie.has( this, 'btn-7h' ) ) {
					// if it is the first of the two btn-7h then activatedClass = 'btn-error';
					// if it is the second then activatedClass = 'btn-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
				}
				else if( classie.has( this, 'btn-8g' ) ) {
					// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
					// if it is the second then activatedClass = 'btn-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			document.querySelector( '.btn-7i' ).addEventListener( 'click', function() {
				classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
			}, false );
		</script>
		<?php wp_footer(); ?>
		
	</body>
</html>
