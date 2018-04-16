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

<body class="home">
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
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="about_c.php">Nosotros</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left_c.php">Servicios</a></li>
							<li class="active"><a href="sidebar-right_c.php">Guia de Contratacion</a></li>
						</ul>
					</li>
					<li><a href="draw.php">Consumo</a></li>
					<li><a class="btn" href="cerrar.php">CERRAR SESION</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">WELCOME</h1>
			
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Nos esforzamos por..... </h2>
		<p class="text-muted">
			<br> ser un operador de buena clase , una corporación responsable con la ciudadanía así como buenos empleadores. Nuestro objetivo, tratar de satisfacer la creciente demanda de energía en todo el mundo de manera responsable con la gente y el medio ambiente.
		
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Nosotros somos...</h2>
		<blockquote>Somos una empresa sustentable, socialmente responsable, con estrictos estándares de seguridad, salud en el trabajo y protección ambiental.  Nuestras actividades las realizamos con estricto apego a la integridad ecológica de las zonas en las que trabajamos, impulsando el desarrollo social y económico de las comunidades. 

			</blockquote>
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


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