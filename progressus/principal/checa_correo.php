<?php 



		$mysqli= new mysqli("localhost","root","","id3763537_comentarios") ;
$mysqli->set_charset("utf8");

	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}
$r = $mysqli->query("SELECT * FROM clientes WHERE correo = '$_REQUEST[correo]'");

 if( $r->num_rows == 0){

$g = $mysqli->query("SELECT * FROM gerentes WHERE correo = '$_REQUEST[correo]'");

 if( $g->num_rows == 0){
$h = $mysqli->query("SELECT * FROM usuarios WHERE correo = '$_REQUEST[correo]'");

 if( $h->num_rows == 0){
$nom="$_REQUEST[nombre]";
$apat="$_REQUEST[apellidoP]";
$amat="$_REQUEST[apellidoM]";
$corr="$_REQUEST[correo]";
$cont="$_REQUEST[contra]";


 echo "<script>";
echo "window.location = 'signup_cliente_domicilio.php?nom=$nom&apat=$apat&amat=$amat&corr=$corr&cont=$cont';";



echo "</script>";



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
echo "alert('El correo ya esta registrado, ingresa otro');"; 
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

?>