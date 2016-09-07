<section id="footer">
			<a href="#header" class="smoothscroll fh5co-arrow"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
			<div class="container">
				<div class="row socialout animate-box">
					<div class="social">
						<div class="row">
							<div class="col-xs-4 col-md-4 text-center">
								<a class="facebook" href="https://www.facebook.com/Televaz/">
									<i class="fa fa-facebook fa-3" aria-hidden="true"></i>
								</a>
							</div>
							<div class="col-xs-4 col-md-4 text-center">
								<a class="twitter" href="https://twitter.com/televaz">
									<i class="fa fa-twitter fa-3" aria-hidden="true"></i>
								</a>
							</div>
							<div class="col-xs-4 col-md-4 text-center">
								<a class="instagram" href="https://www.instagram.com/televaz_tlv/">
									<i class="fa fa-instagram fa-3" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 ">
								<h2 class="primertitulo">Teléfonos</h2>
								<p>
									4325.1028<br>
									4325.7902
								</p>
								<h2>Nuestas Oficinas</h2>
								<p>
									Palermo: Juncal 4480 - Capital Federal - CP: 1425<br>
									Microcentro: Maipú 350 - Capital Federal - CP: 1006<br>
									Costa Salguero: R. Obligado S/N y J. Salguero - Capital Federal - CP: 1425<br>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box" style="z-index:-1;">
						<div id="map"></div>
					</div>
				</div>
				
			</div>
		</section>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<script>
			function initGoogle() {
				window.setTimeout(initMap, 2000);
			}
			
			function initMap() {
				var geocoder, map;

				function codeAddress(address) {
					geocoder = new google.maps.Geocoder();
					geocoder.geocode({
						'address': address
					}, function(results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
							var center2 = new google.maps.LatLng(-34.601111, -58.376778);
							var myOptions = {
								zoom: 15,
								center: center2
							}
							map = new google.maps.Map(document.getElementById("map"), myOptions);

							var marker = new google.maps.Marker({
								map: map,
								position: results[0].geometry.location
							});
							
							marker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
							
							var contentString = '<div id="content">'+
							  '<div id="siteNotice">'+
							  '</div>'+
							  '<h1 id="firstHeading" class="firstHeading"><b>Televaz S.R.L.</b></h1>'+
							  /*'<div id="bodyContent">'+
							  '<p>Direcci&oacute;n: Maip&uacute; 350<p>' +
							  '<p>Tel&eacute;fonos: 4325.7902/1028<p>'+
							  '</div>'+*//**/
							  '</div>';

							var infowindow = new google.maps.InfoWindow({
								content: contentString
							});
							infowindow.open(map, marker);

							marker.addListener('click', function() {
								infowindow.open(map, marker);
							});
						}
					});
				}
				codeAddress('maipu 350');
			}
		</script> 
		<script
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGGZmdVI-WA9id7n3XgPxat1GLK9Kn74Y&callback=initGoogle" async>
		</script>