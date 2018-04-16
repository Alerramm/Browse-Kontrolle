<?php
$v1=$_GET['id'];

$v2=$_GET['st'];

		$mysqli= new mysqli("localhost","root","","id3763537_comentarios");
$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}

    if($v2==1){

 if (!$mysqli->query("UPDATE `id3763537_comentarios`.`contactos` SET `id_estado` = '2' WHERE `contactos`.`id_contactos` = $v1")) {
    echo "Falló la actualizacion de el registro: (" . $mysqli->errno . ") " . $mysqli->error;



}else{
echo "<script>";
echo "alert('Actualizacion de estado de contacto exitoso');";  
echo "window.location = 'contact.php';";
echo "</script>";
}
    }else{

if (!$mysqli->query("UPDATE `id3763537_comentarios`.`contactos` SET `id_estado` = '1' WHERE `contactos`.`id_contactos` = $v1")) {
    echo "Falló la actualizacion de el registro: (" . $mysqli->errno . ") " . $mysqli->error;



}else{
echo "<script>";
echo "alert('Actualizacion de estado de usuario exitoso');";  
echo "window.location = 'contact.php';";
echo "</script>";
}

    }

 ?>