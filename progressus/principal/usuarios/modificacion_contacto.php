

<?php
		$mysqli= new mysqli("localhost","root","","id3763537_comentarios");
$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}
$var="$_REQUEST[status]";
  $en=0;  
    if ($var=='Activo') {
    	# code...
    
    	$en=1;
    }else{
    	
    	$en=2;
    }


 
 

 if (!$mysqli->query("update contactos set nombre ='$_REQUEST[nombre]',correo='$_REQUEST[correo]',telefono='$_REQUEST[telefono]',descripcion='$_REQUEST[descripcion]',id_estado=".$en." WHERE correo='$_REQUEST[correo]' ")) {
    echo "Falló la creación de el registro: (" . $mysqli->errno . ") " . $mysqli->error;



}else{
echo "<script>";
echo "alert('Modificacion exitosa');";  
echo "window.location = 'contact.php';";
echo "</script>";
}


 





?>
