<?php 
$curp="$_REQUEST[correo]";
if ($curp=="") {
	# code...
 echo "<script>";
echo "alert('El correo no existe, ingresa otro');"; 
echo "javascript:window.history.back();";
echo "</script>";

} else {
	# code...
$mysqli= new mysqli("localhost","root","","id3763537_comentarios");
$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
								}




$cu=$mysqli ->query("SELECT * FROM contactos WHERE correo = '$_REQUEST[correo]'");

if($cu-> num_rows==1)
	{

$nombre = current($mysqli ->query("SELECT nombre FROM contactos WHERE correo = '$_REQUEST[correo]'")->fetch_assoc());
$correo = current($mysqli ->query("SELECT correo FROM contactos WHERE correo = '$_REQUEST[correo]'")->fetch_assoc());
$telefono = current($mysqli ->query("SELECT telefono FROM contactos WHERE correo = '$_REQUEST[correo]'")->fetch_assoc());
$descripcion = current($mysqli ->query("SELECT descripcion FROM contactos WHERE correo = '$_REQUEST[correo]'")->fetch_assoc());
$id_estado = current($mysqli ->query("SELECT id_estado FROM contactos WHERE correo = '$_REQUEST[correo]'")->fetch_assoc());


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
				<a class="navbar-brand" href="gerente.html"><img src="assets/images/logo1.png" alt="Progressus HTML5 template"></a>
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
			<li><a href="contact.php">Change Status</a></li>
			<li class="active">Modificacion</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Modificar contacto</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Modificacion de Contacto</h3>
							
							<hr>

							<form action="modificacion_contacto.php" method="post" autocomplete="off">
								<div class="top-margin">
									<label>Nombre<span class="text-danger">*</span></label>
									
									<input  value=<?php echo $nombre;?>   type="text" name="nombre" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>

								</div>
								<div class="top-margin">
									<label>Correo<span class="text-danger">*</span></label>
									<input type="text" value=<?php echo $correo;?> style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="correo" class="form-control" required>
								</div>
								
								
								
								<div class="top-margin">
									<label>Telefono<span class="text-danger">*</span></label>
									<input type="text" minlength="11" value=<?php echo $telefono;?>  maxlength="20"  name="telefono" class="form-control" required id="username" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
								</div>
								<div class="top-margin">
									<label>Estado<span class="text-danger">*</span></label>
									<select class="form-control" name="status">
										<?php if($id_estado==1){
										echo"	<option>Activo</option>";
 									 echo"<option>Inactivo</option>";

										}else{
										echo"	<option>Inactivo</option>";
 									 echo"<option>Activo</option>";
										}
											?>
										
 									 
									</select>
								</div>
								
								<div class="top-margin">
									<label>Descripcion <span class="text-danger">*</span></label>
									
									<textarea  placeholder="Escribe tu mensaje detallando tu solicitud." class="form-control" name="descripcion" maxlength="4900" rows="9" required> <?php echo $descripcion;?></textarea>
								</div>


								<hr>

								<div class="row">
									
									<div class="col-lg-14 text-right">

										<button class="btn btn-action" type="button" name="Cancelar" value="Cancelar" onClick="history.back()">CANCELAR</button>
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

<?php


	}else{
echo "<script>";
echo "alert('El CURP no fue localizado');"; 
echo "javascript:window.history.back();";
echo "</script>";
	
	}


}



 ?>