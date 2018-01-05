<?php
include("database.php");
include("comprobar.php");

if ($_SESSION['PW']!=$_POST['oldpw']) {
  # code...
}else {
  # code...


    $revisar = $database->prepare(" select COUNT(*) from Cliente where Rut = '".$_SESSION['ID']."' and pw = '".$_SESSION['PW']."' ");
    $revisar->execute();
    foreach ($revisar as $key => $value) {
      $existe = $value[0];
      # code...
    }


    if($existe==1  ){
    $actualizar = $database->prepare("UPDATE `catbank`.`Cliente` SET  `Nombre`=?, `Apellido`=?, `Direccion`= ?, `Fono`= ? , Correo=?, pw=? WHERE Rut=? ");
    $actualizar->execute(array($_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['fono'],$_POST['email'],$_SESSION['PW'],$_SESSION['ID'] ));
    $_SESSION['NAME']= $_POST['nombre'];
    $_SESSION['LNAME']= $_POST['apellido'];



    include("pagina.php");
    echo "
      <div class='alert alert-success alert-dismissable'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
        <strong>Haz cambiado tus datos con éxito!</strong>
      </div>
      ";

    }
    else {

      include("pagina.php");
      echo "
      <div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
          <strong>No se han podido realizar los cambios!</strong>
        </div>
        ";

    }

}
?>
