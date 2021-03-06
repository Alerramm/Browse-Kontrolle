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
					<li class="active"><a href="about_c.php">Nosotros</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left_c.php">Servicios</a></li>
							<li class="active"><a href="sidebar-right_c.php">Guia de Contratacion</a></li>
						</ul>
					</li>
					<li><a href="draw.php">Consumo</a></li>
					<li><a class="btn" href="cerrar.php">CERRAR SESION</a></li>	</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="cliente.php">Inicio</a></li>
			<li class="active">Nosotros</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">A NUESTROS CLIENTES:</h1>
				</header>
				<h3>NUESTRO LEMA: </h3>
				<p><img src="assets/images/mac.jpg" alt="" class="img-rounded pull-right" width="300" > Es dar Soluciones Integrales evitándole problemas, abusos y conflictos vecinales. </p>
				
				<h3>NUESTRO OBJETIVO:</h3>
				<p>Es asegurar el pago justo de este servicio, así como evitarle la pérdida de tiempo, ofreciéndole entre otros servicios, principalmente la Administración del Suministro de GAS L.P. en  condominios, fraccionamientos, casa-habitación, negocios y empresas.</p>
				<h3>NUESTRAS NEGOCIACIONES:</h3>
				<p>Son Confiables y Transparentes, para ello contamos con personal calificado y un soporte técnico de vasta experiencia, para que nuestros clientes, estén siempre satisfechos con cada trabajo que realizamos.</p>
				<h3>NUESTRO COMPROMISO:</h3>
				<p>Es brindarle siempre un Servicio de Calidad, Honesto y de modo Eficiente, dándole un trato personalizado a cada uno de nuestros clientes, cubriendo sus necesidades de manera oportuna.</p>
				
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>ETICA E INTEGRIDAD CORPORATIVA</h4>
					<ul class="list-unstyled list-spaces">
						<li>Percepcion</a><br><span class="small text-muted">Mejorar la percepción que se tiene respecto de la cultura en los principios éticos y de integridad</span></li>
						<li>Minimizar</a><br><span class="small text-muted">Minimizar la probabilidad de ocurrencia de aquellos riesgos de corrupción identificados en las actividades del negocio.</span></li>
						<li>Confianza</a><br><span class="small text-muted">Mejorar la confianza de nuestros socios comerciales en el comportamiento ético e íntegro de la empresa.</span></li>
						<li>Mejora</a><br><span class="small text-muted">Mejorar la respuesta a los actos de incumplimiento en ética o integridad.</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

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