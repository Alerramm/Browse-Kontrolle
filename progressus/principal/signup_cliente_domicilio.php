<?php

if($_GET['nom']==null){
	
 echo "<script>";
echo "alert(Algun valor del primer formulario no fue ingresado');"; 
echo "window.location = 'index.html';";
echo "</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
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
					<li><a href="index.html">Inicio</a></li>
					<li><a href="about.html">Nosotros</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Servicios</a></li>
							<li class="active"><a href="sidebar-right.html">Guia de contratacion</a></li>
						</ul>
					</li>
						<li><a href="contact.html">Contacto</a></li>
					<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>	
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="gerente.html">Home</a></li>
			<li class="active">Registro Cliente</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registrate</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Domicilio</h3>
							
							<hr>
<?php
$nombre=$_GET['nom'];
$apellidoP=$_GET['apat'];
$apellidoM=$_GET['amat'];
$correo=$_GET['corr'];
$contra=$_GET['cont'];


?>
							<form action=<?php echo "registro_cliente.php?nombre=".$nombre."&apellidoP=".$apellidoP."&apellidoM=".$apellidoM."&correo=".$correo."&contra=".$contra;?> method="post" autocomplete="off" enctype="multipart/form-data">
								<div class="top-margin">
									<label>Calle<span class="text-danger">*</span></label>
									<input type="text" name="calle" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="top-margin">
									<label>Numero Interior<span class="text-danger">*</span></label>
									<input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="n_interior" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Numero Exterior<span class="text-danger">*</span></label>
									<input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="n_exterior" class="form-control" required>
								</div>
									<div class="top-margin">
									<label>Colonia<span class="text-danger">*</span></label>
									<input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="colonia" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Codigo Postal<span class="text-danger">*</span></label>
									<input type="codigo_postal" minlength="11"  maxlength="11"  name="codigo_postal" class="form-control" required id="username" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
								</div>
								

								<div class="top-margin">
									<label>Ciudad<span class="text-danger">*</span></label>
									<input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="ciudad" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Estado<span class="text-danger">*</span></label>
								<select name="estado" class="form-control" >
      <option value="no">Seleccione uno...</option>
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Distrito Federal">Distrito Federal</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
  </select>
</div>
<div class="form-group">
    <label for="ejemplo_archivo_1">Escanea tu comprobante de domicilio</label>
    <input type="file" id="archivo" name="archivo" required accept="image/png, .jpeg, .jpg, image/gif">
    <p class="help-block">Unicamente se acepta en formato .png, .jpeg, .jpg, .gif.</p>
  </div>
								<hr>

								<div class="row">
									
									<div class="col-lg-14 text-right">

										<button class="btn btn-action" type="button" name="Cancelar" value="Cancelar" onClick="history.back()">Cancelar</button>
										<button class="btn btn-action" type="submit">Registrar</button>
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