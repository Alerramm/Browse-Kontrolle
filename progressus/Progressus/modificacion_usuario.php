

<?php
		$mysqli= new mysqli("localhost","root","","id3763537_comentarios");

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


 
 /*$q = $mysqli->query("SELECT * FROM usuarios WHERE curp = '$_REQUEST[curp]'");

 if( $q->num_rows == 0){

 $w = $mysqli->query("SELECT * FROM usuarios WHERE rfc = '$_REQUEST[rfc]'");

 if( $w->num_rows == 0){

 $e = $mysqli->query("SELECT * FROM usuarios WHERE imms = '$_REQUEST[imms]'");

 if( $e->num_rows == 0){

$r = $mysqli->query("SELECT * FROM usuarios WHERE correo = '$_REQUEST[correo]'");

 if( $r->num_rows == 0){*/

 if (!$mysqli->query("update usuarios set nombre ='$_REQUEST[nombre]',ap_paterno='$_REQUEST[apellidoP]',ap_materno='$_REQUEST[apellidoM]',rfc='$_REQUEST[rfc]',imms='$_REQUEST[imms]',correo='$_REQUEST[correo]',contra='$_REQUEST[contra]',id_estado=".$en.") WHERE curp='$_REQUEST[curp]' ")) {
    echo "Falló la creación de el registro: (" . $mysqli->errno . ") " . $mysqli->error;



}else{
echo "<script>";
echo "alert('Registro Exitoso');";  
echo "javascript:window.history.back();";
echo "</script>";
}
}
else{

 echo "<script>";
echo "alert('El correo ya esta registrado, ingresa otro');"; 
echo "javascript:window.history.back();";
echo "</script>";

 

}
 

}
else{




 
 echo "<script>";
echo "alert('El numero de IMMS ya esta registrado, ingresa otro');"; 
echo "javascript:window.history.back();";
echo "</script>";


}


}
else{



 
 echo "<script>";
echo "alert('el RFC ya esta registrado, ingresa otro');"; 
echo "javascript:window.history.back();";
echo "</script>";

}



}
else{

 echo "<script>";
echo "alert('el CURP ya esta registrado, ingresa otro');"; 
echo "javascript:window.history.back();";
echo "</script>";


 

}








?>
