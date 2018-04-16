
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



 
 $q = $mysqli->query("SELECT correo FROM usuarios WHERE correo = '$_REQUEST[correo]'");

 if( $q->num_rows == 0){
echo "<script>";
echo "alert('Ese correo no ha sido registrado');";  
echo "javascript:window.history.back();";
echo "</script>";


estoy tratando de almacenar un  dato de un select para poder identificar si mi ususario esta activo o inactivo 



 }else{
$resultado = $mysqli->query("SELECT id_usuario FROM usuarios WHERE correo = '$_REQUEST[correo]'");
    $fila = $resultado->fetch_assoc();

    
    
    if( $fila[0] == 1){

echo "activo";
 }else{
echo "inactivo";
 }


 }











?>
