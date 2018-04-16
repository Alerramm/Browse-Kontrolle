<?php
$mail = "Bienvenido "."$_REQUEST[nombre]"."<br>"."Este es el correo de confiramacion de tu ticket, lo mas pronto posible se pondran en contacto contigo a el numero ."."$_REQUEST[telefono]"."<br>"."Hasta pronto";
//Titulo
$titulo = "MENSAJE DE CONFIRMACION";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Browse-Kontrolle < browse-kontrolle@gmail.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("$_REQUEST[correo]",$titulo,$mail,$headers);
if($bool){
    echo "<script>";
echo "alert('El ticket se envio');"; 
echo "javascript:window.history.back();";
echo "</script>";
}else{
    echo "<script>";
echo "alert('El ticket no se envio');"; 
echo "javascript:window.history.back();";
echo "</script>";
}

	$mysqli= new mysqli("localhost","root","","id3763537_comentarios") ;
$mysqli->set_charset("utf8");




	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}


$usu = current($mysqli ->query("SELECT id_usuarios FROM usuarios ORDER BY RAND() LIMIT 1")->fetch_assoc());

 if (!$mysqli->query("insert into contactos(nombre,correo,telefono,descripcion,id_usuarios,id_estado) values 
   ('$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[telefono]','$_REQUEST[descripcion]',".$usu.",1".")")) {
    echo "Falló la creación de el registro: (" . $mysqli->errno . ") " . $mysqli->error;


}



?>