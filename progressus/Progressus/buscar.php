<?php 
$curp="$_REQUEST[curp]";
if ($curp=="") {
	# code...
 echo "<script>";
echo "alert('El curp no existe, ingresa otro');"; 
echo "javascript:window.history.back();";
echo "</script>";

} else {
	# code...
$mysqli= new mysqli("localhost","root","","id3763537_comentarios");

	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
								}



if (!$mysqli->query("SELECT * FROM usuarios WHERE curp = '$_REQUEST[curp]'")) {
    echo "Falló la busqueda, vuelve a intentarlo: (" . $mysqli->errno . ") " . $mysqli->error;



}

}



 ?>