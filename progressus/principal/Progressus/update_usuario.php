
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
	
	<title>Browse-kontrolle</title>

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
				<a class="navbar-brand" href="gerente.php"><img src="assets/images/logo1.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<!--<li><a href="gerente.html">Inicio</a></li> 
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceso <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="signin.html">Cliente</a></li>
							<li class="active"><a href="signin.html">Usuario</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Registro <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Producto</a></li>
							<li class="active"><a href="signup_usuario.html">Usuario</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Change Status</a></li> -->
 				</ul> -->
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="gerente.php">Regresar</a></li>
			<li class="active">Modificacion</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Modificar Usuario</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Modificacion de Usuario</h3>
							
							<hr>

							<form action="modificacion_usuario.php" method="post" autocomplete="off">
								<div class="top-margin">
									<label>Nombre<span class="text-danger">*</span></label>
									<input type="text" name="nombre" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="top-margin">
									<label>Apellido Paterno<span class="text-danger">*</span></label>
									<input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidoP" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Apellido Materno<span class="text-danger">*</span></label>
									<input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidoM" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>CURP<span class="text-danger">*</span></label>
									<input type="text" name="curp" class="form-control" pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]" title="Ejemplo: GAGA960815HMCLRL07" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="top-margin">
									<label>RFC<span class="text-danger">*</span></label>
									<input type="text" name="rfc" class="form-control" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$" title="Ejemplo: GAGA9608155G5" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="top-margin">
									<label>Numero de Seguro Social<span class="text-danger">*</span></label>
									<input type="text" minlength="11"  maxlength="11"  name="imms" class="form-control" required id="username" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
								</div>
								<div class="top-margin">
									<label>Estado<span class="text-danger">*</span></label>
									<select class="form-control" name="status">
 									 <option>Activo</option>
 									 <option>Inactivo</option>
									</select>
								</div>
								
								<div class="top-margin">
									<label>Correo <span class="text-danger">*</span></label>
									<input type="email" name="correo" class="form-control" required>
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Contraseña <span class="text-danger">*</span></label>
										<input type="password" name="contra" class="form-control" maxlength="25" required>
									</div>
									
								</div>

								<hr>

								<div class="row">
									
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Modificar</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
					</div>

		<div class="footer2">
			
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