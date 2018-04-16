<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
echo "<script>";
echo "location.href='../index.html'";  
echo "</script>";	
echo "Esta pagina es solo para usuarios registrados.";
}
$now = time();
if($now > $_SESSION['expire']) {
session_destroy();
echo "<script>";
echo "location.href='../index.html'";  
echo "</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Browse-Kontrolle</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo1.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="cliente.php">Inicio</a></li>
					<li><a href="about_c.php">Nosotros</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="sidebar-left_c.php">Servicios</a></li>
							<li><a href="sidebar-right_c.php">Guia de contratacion</a></li>
						</ul>
					</li>
					<li><a href="draw.php">Consumo</a></li>
					<li><a class="btn" href="cerrar.php">Cerrar Sesion</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="cliente.php">Inicio</a></li>
			<li class="active">Servicios</li>
		</ol>

		<div class="row">
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Servicio</h4>
						<p>La comercialización de hidrocarburos y sus derivados tiene 
el objetivo ofrecer un servicio y productos de calidad </p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Contamos con servicio de instalaciones de gas</h4>
						<p><img src="assets/images/instalacion.jpg" alt=""></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Pregunta por promociones</h4>
						<p><img src="assets/images/promo.jpg" alt=""></p>
						<p>Comercializacion de producto y servicio entre sus principales consumidores, que son empresas de transformación, las cuales a su vez participan en todos los sectores de la economía.</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">NUESTROS SERVICIOS.</h1>
				</header>
				<UL>
					<LI><P>Costo de contratacion = $0.00</P></LI>
					<li>Toma de lectura de lectura de medidores un día en específico cada mes.</li>
					<li>Entrega de recibos por departamento cada mes. </li>
					<li>Factor de conversión de m3 a litros = 4.00 (1 m3 es igual a 4 litros de gas).</li>
					<li>Costo administrativo de $ 20.00 (Veinte  pesos 00/100 m.n.) mensual, por departamento, pagando el monto exacto del recibo en cuenta normal.</li>
					<li>EI pago del consumo de gas se podrá realizar en diferentes bancos, como: HSBC, BANAMEX, BANCOMER y BANORTE. Dentro de los 7(siete) días siguientes a la entrega de los recibos.</li>
					<li>El corte del suministro de Gas L. P. a los condóminos morosos, se realizara en las 24 Hrs. siguientes a la fecha límite de pago. Cobrando la cantidad de $100.00 (Cien  pesos 00/100 m. n.) por Reinstalación. </li>
					<li>Se realizara la revisión de su instalación común (tanque(s) a medidores) una vez al año sin costo. </li>
					<li>La revisión de su instalación interna (medidor a departamento) es opcional y tendrá un costo de $ 250.00 (doscientos cincuenta pesos 00/100 m. n.)  por departamento. </li>
					<li>EI nivel de inventario mínimo en el tanque estacionario al inicio de la administración es de acuerdo a la capacidad del tanque y/o no. de departamentos ocupados. </li>
					<li>EL precio del gas será de acuerdo al  Diario Oficial de la Federación, el día 1ero. de cada mes</li>
					<li>Contamos con Técnicos Especializados en Gas, para ofrecerles Instalaciones nuevas, modificaciones así como cambios de medidores, válvulas, reguladores etc. con precios competitivos y trabajos garantizados. </li>


				<h2>Otros beneficios</h2>
				<ul>
					<li>Contamos con Técnicos Especializados en Gas, para ofrecerles Instalaciones nuevas, modificaciones así como cambios de medidores, válvulas, reguladores etc. con precios competitivos y trabajos garantizados. </li>
					<li>Tenemos contrato de suministro con varias empresas líderes en el ramo de Almacenamiento y Distribución de Gas L.P. para garantizar a nuestros clientes el abasto en caso de escasez. </li>
				

				<blockquote>POR QUE TU ERES NUESTRA PREFERENCIA.</blockquote>
				

				<h3>Te brindamos el mejor servicio que puedes encontrar con buena calidad y con muy buenos costos.</h3>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>(55)76999810<br>
								<a href="mailto:#">browse-kontrolle@gmail.com</a><br>
								<br>
								AV. San Francisco no. 30 Col Los Heroes Mpio. Coacalco, 55712, estado de México.
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="https://www.facebook.com/Administracion.De.Gas/?ref=settings" target="_blank"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">BROWSE-KONTROLLE</h3>
						<div class="widget-body">
							<p> La empresa BROWSE-KONTROLLE nos dedicamos a suminstrar gas en negocios como pastelerias, restaurantes, hoteles y casas habitacion.
							La empresa se enfoca en dar un buen servicio de intalacion del gas, tomando en cuenta la seguridad del consumidor al igual que la segurid  de nuestros colaboradores. </p>
							
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>