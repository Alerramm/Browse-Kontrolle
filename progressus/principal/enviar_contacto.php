<?php
$mail = "Bienvenido"."$_REQUEST[nombre]"."<br> n"."Este es el correo de confiramcion de tu ticket, lo mas pronto posible se pondran en contacto contigo. Se te adjunto tu ticket en PDF."."<br> n"."Hasta pronto";
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
?>