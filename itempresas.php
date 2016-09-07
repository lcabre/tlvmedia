<?php 
	$titulo="Soluciones IT para Empresas";
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

				<i class="fa fa-building-o hero-animate-1 fa-2" aria-hidden="true"></i></i>
				<h1 class="hero-animate-2"><?php echo $titulo; ?></h1>
			</div>
			<a href="#uno" class="smoothscroll fh5co-arrow hero-animate-3"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</section>
		<section id="uno">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="animate-box">Soluciones IT para Empresas</h2>
						<p class="animate-box">Poseemos un servicio propio de ingeniería que nos permite brindar servicios avanzados a empresas según sus necesidades. Hacemos un estudio previo teniendo en cuenta los requisitos previos de nuestros clientes que concluye en un entregable donde se especifican los servicios ofertados, sus posibilidades y ampliaciones futuras<br> <br> 
						Te ofrecemos:
						</p>	
					
						<div class="lista">
							<p class="animate-box">	
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Conectividad ajustada a tus necesidades, bien sea asimétrica, simétrica, con garantía total de servicio.<br>
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Soluciones de telefonía Ip y centralitas. Ajusta tus costes telefónicos y une tus sedes.<br>
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Desarrollo web y alojamiento en un entorno seguro<br>
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Creamos y mantenemos tu red de comunicaciones, ya sea WIFI o cableado estructurado.<br>
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Especialistas en el diseño, implantación y mantenimiento de redes wifi para hoteles y centros públicos<br>
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Auditamos tu red añadiendo la seguridad que necesites y conectamos tus sedes para evitar costes de explotación.<br>
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Te ofrecemos lo que otros no tienen, productos de valor añadido, eguridad video-vigilancia y control de acceso, router/firewall/balanceadores de tráfico<br>
							</p>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<?php include("inc/footer.php"); ?>
	</body>
</html>