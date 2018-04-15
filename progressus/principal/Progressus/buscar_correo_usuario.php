<?php
	$mysqli= new mysqli("localhost","root","","id3763537_comentarios");

	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}


$usuarios=$mysqli ->query("SELECT correo
	FROM usuarios
	WHERE nombre='"."$_REQUEST[nombre]"."'
	AND ap_paterno='"."$_REQUEST[apaterno]"."'
	AND ap_materno= '"."$_REQUEST[amaterno]"."'");




if($usuarios-> num_rows==1)
	{
		
		$usuario = current($mysqli ->query("SELECT correo
	FROM usuarios
	WHERE nombre='"."$_REQUEST[nombre]"."'
	AND ap_paterno='"."$_REQUEST[apaterno]"."'
	AND ap_materno= '"."$_REQUEST[amaterno]"."'")->fetch_assoc());
		

		echo "<script>";
 
echo "window.location = '../Progressus/signin_usuario.php?correo=$usuario';";
echo "</script>";

	}else{
		echo "<script>";
echo "alert('Ese nombre no existe');";  
echo "window.location = 'signin_usuario.html';"; 
echo "</script>";

	}


?>
