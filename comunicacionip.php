<?php 
	$titulo="Comunicación IP";
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

				<i class="fa fa-globe hero-animate-1 fa-2" aria-hidden="true"></i></i>
				<h1 class="hero-animate-2"><?php echo $titulo; ?></h1>
			</div>
			<a href="#uno" class="smoothscroll fh5co-arrow hero-animate-3"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</section>
		<section id="uno">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="animate-box">Comunicación IP</h2>
						<div class="lista">
							<p class="animate-box">	
								<i class="fa fa-check-square-o" aria-hidden="true"></i>Desde TLV Media, te asesoramos para comprobar cual es el producto que se adapta mejor a tu perfil. Podemos ofrecerte servicios de transporte entre varias sedes o entrega de caudal a internet garantizado con velocidades desde 10Mbps hasta 2Gbps<br>
								

								<i class="fa fa-check-square-o" aria-hidden="true"></i>Evaluamos tu mejor opción para telefonía IP, ofreciendo un producto de calidad sin letra pequeña que te permita el ahorro de costes en la Telefonía corporativa y ofrece una flexibilidad en las comunicaciones de voz permitiendo contar con terminales de su propia centralita corporativa en cualquier lugar del mundo que cuente con una conectividad a internet.<br>

								<i class="fa fa-check-square-o" aria-hidden="true"></i>Mediante la distribución de las plataformas convergentes de Telefonía IP de Avaya o soluciones libres como Asterisk, dispondremos de soluciones IP de diversos tamaños.<br>

								<i class="fa fa-check-square-o" aria-hidden="true"></i>Poseemos acuerdos con los principales mayoristas de provisión de servicios de internet además de distintos coberturaoperadores de telecomunicaciones que nos permiten llegar casi a cualquier punto de Bs. As., brindándote un producto que realmente se ajuste a tus necesidades.<br>

								<i class="fa fa-check-square-o" aria-hidden="true"></i>Tenemos un servicio cercano a nuestros clientes para buscar las mejores soluciones para su negocio.<br>

								<i class="fa fa-check-square-o" aria-hidden="true"></i>Poseemos productos específicos para los entornos hospitalarios. Llevamos más de 10 años dando servicios de informática y telecomunicaciones a organismos como el Hospital Universitario Virgen de las Nieves de Granada
							</p>	
						</div>
					</div>
				</div>	
			</div>
		</section>
		<?php include("inc/footer.php"); ?>
	</body>
</html>