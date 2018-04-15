<?php
	$mysqli= new mysqli("localhost","root","","id3763537_comentarios");

	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}



$usuarios=$mysqli ->query("SELECT correo, contra
	FROM usuarios
	WHERE correo='"."$_REQUEST[correo]"."'
    AND contra= '"."$_REQUEST[contra]"."'");

if($usuarios-> num_rows==1)
{
 echo "exito";

   
}else{
$gerente=$mysqli ->query("SELECT correo, contra
	FROM gerentes
	WHERE correo='"."$_REQUEST[correo]"."'
    AND contra= '"."$_REQUEST[contra]"."'");

if($gerente-> num_rows==1)
	{
echo "<script>";
echo "location.href='progressus/gerente.html'";  
echo "</script>";

	}else{
$clientes=$mysqli ->query("SELECT correo, contra
	FROM clientes
	WHERE correo='"."$_REQUEST[correo]"."'
    AND contra= '"."$_REQUEST[contra]"."'");

if($clientes-> num_rows==1)
	{
		echo"no se";

	}else{
		 echo "<script>";
echo "alert('El correo o la contraseña son invalidos');"; 
echo "javascript:window.history.back();";
echo "</script>";
	}
}
}
?>
