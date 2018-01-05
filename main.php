<?php 

include("database.php");


/*
///////////////////////////comprobar inicio de sesion/////////////////////
if($_GET['clave']!=NULL){	
	$_SESSION['PW']=$_GET['clave'];
}
if($_GET['rut']!=NULL){	
	$_SESSION['ID']=$_GET['rut'];
}
*/	
$persona = $database->prepare("SELECT * from cliente ");
$persona->execute();
$resultado = $persona->fetchAll();
foreach ($resultado as $key => $value) {
	# code...

	$_SESSION['NAME'] = $value[1];
	$_SESSION['LNAME']   = $value[2];
	$_SESSION['ID']     = $value[0];

}



 ?>