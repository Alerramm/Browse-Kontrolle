

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


 
 

 if (!$mysqli->query("update usuarios set nombre ='$_REQUEST[nombre]',ap_paterno='$_REQUEST[apellidoP]',ap_materno='$_REQUEST[apellidoM]',rfc='$_REQUEST[rfc]',imms='$_REQUEST[imms]',correo='$_REQUEST[correo]',contra='$_REQUEST[contra]',id_estado=".$en." WHERE curp='$_REQUEST[curp]' ")) {
    echo "Falló la creación de el registro: (" . $mysqli->errno . ") " . $mysqli->error;



}else{
echo "<script>";
echo "alert('Modificacion exitosa');";  
echo "window.location = '../Progressus/contact.php';";
echo "</script>";
}


 





?>
