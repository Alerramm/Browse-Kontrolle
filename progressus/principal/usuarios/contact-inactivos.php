<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Contact us - Progressus Bootstrap template</title>

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
					<li><a href="usuarios.html">Inicio</a></li>
					
					<li><a href="contact.php">Change Status</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="gerente.html">Inicio</a></li>
			<li class="active">Change Status</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Change Status</h1>
				</header>
				<form action="buscar.php">
							<div class="row">
							<label>Buscar</label>
							</div>
						<div class="row">

							<div class="col-sm-12">
								<input class="form-control" name="correo" type="text" placeholder="correo">
							
						</div>
						</div>
						
						<br>
						
								
							<div class="col-sm-2 text-right">
								<input class="btn btn-action" type="submit" value="Buscar">
							</div>
						
					</form>
<br>
<br><br><br>
						<form >
							<div class="col-sm-12">
								<div class="row">
									<label>Contacto</label>
									<select class="form-control" name="status" id="status">
 									 <option value="I">Inactivo</option>
 									 <option value="A">Activo</option>
 									 <option value="AyI">Activos/Inactivos</option>
									</select>
								<br>
								</div>	
								</div>
								<br><br><br><br>
								<div class="col-sm-2 text-right">
								<input class="btn btn-action" type="submit" value="Actualizar">
							</div>
							<br><br><br>
							</form>
								

				<br>
				
							
				
					<br>
					
						<div class="row">
							<div class="col-sm-12">


<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col" colspan="2">ESTATUS</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">CORREO</th>
      <th scope="col">TELEFONO</th>
    </tr>
  </thead>
  <tbody>
    <?php 
	
$mysqli= new mysqli("localhost","root","","id3763537_comentarios");
$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}

$result=$mysqli->query("select id_contactos,nombre,correo,telefono,id_estado from contactos");
if (!$mysqli) {
    echo "Falló la seleccion de el registro: (" . $mysqli->errno . ") " . $mysqli->error;
}else{
	
while ($fila = $result->fetch_row()) {
	$id=$fila[0];
        $st=$fila[4];
       if($fila[4]=="1"){
       
       	?>


  <?php 
 
 }else{

	?>

<tr class="bg-danger">
	<th> <?php  
		echo "<a href='changeS.php?id=$id&st=$st' ><img class='mr-3'  src='assets/images/off.png' alt='Generic placeholder image' ></a>";
		?>  </th>
      <th scope="row">Desactivado</th>
      <td><?php 
       printf("%s\n", $fila[1]);
       ?>  
   	  </td>
      <td><?php 
       printf("%s\n", $fila[2]);
       ?>  
   	  </td>
       <td><?php 
       printf("%s\n", $fila[3]);
       ?>  
   	  </td>
    </tr>
  

  <?php 
}
           	 
            }
            $result->close(); 
        }

  ?>
  </tbody>
</table>




							

								
							</div>
						</div>
						
						<br>
						

			</article>
			<!-- /Article -->
			
			

		</div>
	</div>	<!-- /container -->
	
	<div class="row">
					
					<br/>
<br/>
					

					

				</div>
	

	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					

					

					

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						
					</div>

					<div class="col-md-6 widget">
						
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
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>