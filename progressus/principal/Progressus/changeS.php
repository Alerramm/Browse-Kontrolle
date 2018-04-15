<?php
$v1=$_GET['id'];

$v2=$_GET['st'];

		$mysqli= new mysqli("localhost","root","","id3763537_comentarios");

	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}

    if($v2==1){

 if (!$mysqli->query("UPDATE `id3763537_comentarios`.`usuarios` SET `id_estado` = '2' WHERE `usuarios`.`id_usuarios` = $v1")) {
    echo "Falló la actualizacion de el registro: (" . $mysqli->errno . ") " . $mysqli->error;



}else{
echo "<script>";
echo "alert('Actualizacion de estado de usuario exitoso');";  
echo "window.location = '../Progressus/contact.php';";
echo "</script>";
}
    }else{

if (!$mysqli->query("UPDATE `id3763537_comentarios`.`usuarios` SET `id_estado` = '1' WHERE `usuarios`.`id_usuarios` = $v1")) {
    echo "Falló la actualizacion de el registro: (" . $mysqli->errno . ") " . $mysqli->error;



}else{
echo "<script>";
echo "alert('Actualizacion de estado de usuario exitoso');";  
echo "window.location = '../Progressus/contact.php';";
echo "</script>";
}

    }

 ?>