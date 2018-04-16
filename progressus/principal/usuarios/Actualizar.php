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