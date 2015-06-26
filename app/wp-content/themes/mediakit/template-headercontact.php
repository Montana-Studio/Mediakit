<!-- header -->
<style>
	
	#map-canvas{
		width:100%;
		height: 100%;
	}

</style>
<header class="page-header">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="content-header">
			<div class="encabezado">
				
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">
			    </script>
			    <script type="text/javascript">
			      function initialize() {
			        var mapOptions = {
			          center: {lat: -33.4477512, lng:-70.6246283},
			          zoom: 17,
			          disableDefaultUI:true,
			          draggable:false,
			          scaleControl:false,
			          scrollwheel:false,
			          mapTypeId:google.maps.MapTypeId.ROADMAP,
			          styles:[
						  {
						    "featureType": "road",
						    "stylers": [
						      { "color": "#000000" }
						    ]
						  },{
						    "featureType": "road",
						    "elementType": "labels",
						    "stylers": [
						      { "color": "#ffffff" },
						      { "weight": 0.1 }
						    ]
						  },{
						    "featureType": "landscape.man_made",
						    "stylers": [
						      { "color": "#333333" }
						    ]
						  },{
						    "featureType": "poi",
						    "stylers": [
						      { "visibility": "off" }
						    ]
						  }
						]
			        };
			        var map = new google.maps.Map(document.getElementById('map-canvas'),
			            mapOptions);

					var marker = new google.maps.Marker({
						position:{lat: -33.4476500, lng:-70.625140},
			          	icon:'<?php echo get_template_directory_uri(); ?>/img/logo-map.svg',
			          	animation:google.maps.Animation.DROP
					});

					marker.setMap(map);
			      }
			      google.maps.event.addDomListener(window, 'load', initialize);
			    </script>

				
				<div style="width:100%;height:100%;padding-bottom:10px;">
					<div id="map-canvas"></div>
				</div>
	           
			</div>
		</div>
	</article>
	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>
		
</header>