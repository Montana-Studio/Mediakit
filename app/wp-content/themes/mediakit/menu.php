<div id="menu-colapse" class="nav-colapse">
	<div class="contendor-menu" id="floatMenu">
		<div class="logo-menu-media">
			<a href="<?php echo home_url(); ?>">
				<svg viewBox="0 0 792 656.856">
					<use xlink:href="#mediatrends-logo"/> 
				</svg>
			</a>
		</div>
		<!--<p class="menu-review">review</p>-->
		<div class="search">
			<?php get_template_part('searchform'); ?>
		</div>	
		<div class="menu">
			<?php html5blank_nav(); ?>
		</div>		
	</div>
</div>