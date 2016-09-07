<?php 
	$titulo="Soluciones entorno Salud";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>TLV Media Solutions</title>

		<!-- Bootstrap -->
		
		 <link href="css/estilos.css" rel="stylesheet">
		 <link href="css/animate.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		</head>
	<body>
		<?php include("inc/nav.php"); ?>
		<section id="header" class="page">
			<!--<div class="bottom"></div>
			<div  class="top"></div>-->
			<div class="overlay"></div>
			<div class="inner">
				<!-- <img src="img/logo.png"/> -->
				<i class="fa fa-hospital-o  hero-animate-1 fa-2" aria-hidden="true"></i></i>
				<h1 class="hero-animate-2"><?php echo $titulo; ?></h1>
			</div>
			<a href="#uno" class="smoothscroll fh5co-arrow hero-animate-3"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</section>
		<section id="uno">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="animate-box">Soluciones entorno Salud</h2>
						<p class="animate-box">La modernización de los emplazamientos sanitarios comienza por ofrecer servicios de calidad tanto a los residentes como al personal sanitario y para lograr éstos objetivos, es básica la implantación de tecnologías de última generación para creación de redes Wifi  de alta capacidad que nos permitan a través de ésta utilizar sistemas RFID/RTLS (identificación y localización por radiofrecuencia en tiempo real), que permite la monitorización y la gestión de toda la actividad diaria del edificio. El despliegue de éstas soluciones permitirá un aumento de la productividad del personal y la reducción de los costes de explotación del equipamiento</p>	
						
						<h3 class="animate-box"><i class="fa fa-check-square-o" aria-hidden="true"></i>Red inalámbrica de alta capacidad para pacientes y personal sanitario</h3>
						<p class="animate-box">
						<strong>Monitorización de la red hospitalaria: </strong>Conectividad inalámbrica móvil, transmisión de video, telefonía WIFI IP
						</p>

						<h3 class="animate-box"><i class="fa fa-check-square-o" aria-hidden="true"></i>Localización de pacientes y control de acceso (residentes) a través de WIFI</h3>
						<p class="animate-box">
						<strong>Localización: </strong>Red inalámbrica a través de una pulsera, un tag en la ropa o similar<br>
						<strong>Control de acceso: </strong>Apertura de mecanismos, puertas y demás elementos en remoto
						</p>

						<h3 class="animate-box"><i class="fa fa-check-square-o" aria-hidden="true"></i>Telefonía y vigilancia IP</h3>
						<p class="animate-box">
							<strong>Telefonia IP: </strong>Sistema de telefonía flexible, cuenta con terminales de su propia central corporativa.<br>
							<strong>Vigilancia: </strong>Sistema de  cámaras de vigilancia dia/noche, domo, interior/exterior, detección de movimiento, etc.
						</p>

						<h3 class="animate-box"><i class="fa fa-check-square-o" aria-hidden="true"></i>Hotspots</h3>
						<p class="animate-box">
							Sistema de <strong>HOTSPOT</strong> tanto para pacientes como para personal sanitario, permitiendo distintos servicios y velocidades de pendiendo del usuario que utilice el sistema
						</p>
					</div>
				</div>	
			</div>
		</section>
		<?php include("inc/footer.php"); ?>
	</body>
</html>