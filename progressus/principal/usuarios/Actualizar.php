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
$state="$_REQUEST[status]";
if ($state=="AyI") {
	# code...
 include "contact.php";

} 
if ($state=="A") {
	# code...
 include "contact-activos.php"; 

} 
if ($state=="I") {
	# code...
  include "contact-inactivos.php";

} 



 ?>