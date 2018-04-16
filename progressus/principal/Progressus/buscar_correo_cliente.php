
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
<?php
	$mysqli= new mysqli("localhost","root","","id3763537_comentarios");
$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}


$clientes=$mysqli ->query("SELECT correo
	FROM clientes
	WHERE nombre='"."$_REQUEST[nombre]"."'
	AND ap_paterno='"."$_REQUEST[apaterno]"."'
	AND ap_materno= '"."$_REQUEST[amaterno]"."'");




if($clientes-> num_rows==1)
	{
		
		$cliente = current($mysqli ->query("SELECT correo
	FROM clientes
	WHERE nombre='"."$_REQUEST[nombre]"."'
	AND ap_paterno='"."$_REQUEST[apaterno]"."'
	AND ap_materno= '"."$_REQUEST[amaterno]"."'")->fetch_assoc());
		

		echo "<script>";
 
echo "window.location = '../Progressus/signin_cliente.php?correo=$cliente';";
echo "</script>";

	}else{
		echo "<script>";
echo "alert('Ese nombre no existe');";  
echo "window.location = 'signin_cliente_html.php';"; 
echo "</script>";

	}


?>
