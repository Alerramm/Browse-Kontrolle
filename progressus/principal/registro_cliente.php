

<?php





		$mysqli= new mysqli("localhost","root","","id3763537_comentarios") ;
$mysqli->set_charset("utf8");




	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}

$co=$_GET['correo'];

$r = $mysqli->query("SELECT * FROM clientes WHERE correo = '".$co."'");

 if( $r->num_rows == 0){

$g = $mysqli->query("SELECT * FROM gerentes WHERE correo = '".$co."'");

 if( $g->num_rows == 0){
$h = $mysqli->query("SELECT * FROM usuarios WHERE correo = '".$co."'");

 if( $h->num_rows == 0){


 if (!$mysqli->query("insert into domicilio(calle,n_interior,n_exterior,colonia,codigo_postal,ciudad,estado) values 
   ('$_REQUEST[calle]','$_REQUEST[n_interior]','$_REQUEST[n_exterior]','$_REQUEST[colonia]','$_REQUEST[codigo_postal]','$_REQUEST[ciudad]','$_REQUEST[estado]')")) {
    echo "Falló la creación de el registro: (" . $mysqli->errno . ") " . $mysqli->error;


}else{

 
$id_direccion = current($mysqli ->query("SELECT MAX(id_domicilio) AS id FROM domicilio")->fetch_assoc());

$id_usuarios = current($mysqli ->query("SELECT id_usuarios FROM usuarios ORDER BY RAND() LIMIT 1")->fetch_assoc());



 


$nombre=$_GET['nombre'];
$apellidoP=$_GET['apellidoP'];
$apellidoM=$_GET['apellidoM'];
$correo=$_GET['correo'];
$contra=$_GET['contra'];

 if (!$mysqli->query("insert into clientes(nombre,ap_paterno,ap_materno,correo,contra,id_domicilio,id_usuarios) values 
   ('".$nombre."','".$apellidoP."','".$apellidoM."','".$correo."','".$contra."',".$id_direccion.",".$id_usuarios.")")) {
    echo "Falló la creación de el registro: (" . $mysqli->errno . ") " . $mysqli->error;
}else{
echo "<script>";
echo "alert('Registro Exitoso');";  
echo "window.location = 'signin.html';";
echo "</script>";
}



}
if ($_FILES['archivo']["error"] > 0)

  {

  echo "Error: " . $_FILES['archivo']['error'] . "<br>";

  }
  $id_cliente = current($mysqli ->query("SELECT MAX(id_cliente) AS id FROM clientes")->fetch_assoc());

  move_uploaded_file($_FILES['archivo']['tmp_name'], "direcciones/" .$id_cliente." ". $_FILES['archivo']['name']);




if (!$mysqli->query("UPDATE `id3763537_comentarios`.`clientes` SET `imagen` = '../direcciones/" .$id_cliente." ". $_FILES['archivo']['name']."' WHERE `clientes`.`id_cliente` =".$id_cliente)) {
    echo "Falló la creación de el registro: (" . $mysqli->errno . ") " . $mysqli->error;


}


}
else{
    
 echo "<script>";
echo "alert('El correo ya esta registrado, ingresa otro');"; 
echo "window.location = 'signup_cliente.html';";
echo "</script>";
 

}


}
else{
    
 echo "<script>";
echo "alert('El correo ya esta registrado, ingresa otro');"; 
echo "window.location = 'signup_cliente.html';";
echo "</script>";
 

}





}
else{
    
  echo "<script>";
echo "alert('El correo ya esta registrado, ingresa otro');"; 
echo "window.location = 'signup_cliente.html';";
echo "</script>";

 

}





















?>
