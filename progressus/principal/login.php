<?php
session_start();
?>
<?php
	$mysqli= new mysqli("localhost","root","","id3763537_comentarios");

	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}

$username = "$_REQUEST[correo]";

$password = "$_REQUEST[contra]";


$usuarios=$mysqli ->query("SELECT correo, contra
	FROM usuarios
	WHERE correo='"."$_REQUEST[correo]"."'
    AND contra= '"."$_REQUEST[contra]"."'");



if($usuarios-> num_rows==1)
{
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
echo "<script>";
echo "location.href='usuarios/usuarios.php'";  
echo "</script>";

	}
	else {
	$gerente=$mysqli ->query("SELECT correo, contra
	FROM gerentes
	WHERE correo='"."$_REQUEST[correo]"."'
    AND contra= '"."$_REQUEST[contra]"."'");

if($gerente-> num_rows==1)
	{
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
echo "<script>";
echo "location.href='Progressus/gerente.php'";  
echo "</script>";

	}
	else { 
		$clientes=$mysqli ->query("SELECT correo, contra
	FROM clientes
	WHERE correo='"."$_REQUEST[correo]"."'
    AND contra= '"."$_REQUEST[contra]"."'");

if($clientes-> num_rows==1)
	{
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    	 echo "<script>";
		echo "location.href='clientes/cliente.php'";  
		echo "</script>";


	}
		else { 

   echo "Username o Password estan incorrectos.";
 }

  
 }
 

   
 }







?>
