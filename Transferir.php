<?php
include("database.php");
include_once("comprobar.php");
include("claveTransferencia.php");


$uno =  revisar($_POST['l1'],$_POST['n1'],$_POST['r1'],$_SESSION['IDCARD']);
  if($uno==0){

    include("pagina.php");
    echo "
    <div class='alert alert-danger alert-dismissable'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
        <strong>Los numeros estan equivocados, intentelo en otro momento</strong>
      </div>
      ";

}else{
  $dos =  revisar($_POST['l2'],$_POST['n2'],$_POST['r2'],$_SESSION['IDCARD']);
  if($dos==0){
    include("pagina.php");
    echo "
    <div class='alert alert-danger alert-dismissable'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
        <strong>Los numeros estan equivocados, intentelo en otro momento</strong>
      </div>
      ";

  }else{
    $tres =  revisar($_POST['l3'],$_POST['n3'],$_POST['r3'],$_SESSION['IDCARD']);
    if($tres==0){
      include("pagina.php");
      echo "
      <div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
          <strong>Los numeros estan equivocados, intentelo en otro momento</strong>
        </div>
        ";

    }else {

      $cuenta_destino=0;
      $comprobar=$database->prepare(" select Ncuenta from Cuenta where Cliente_Rut = '".$_POST['id']."'");
      $comprobar->execute();

      $mostrar = $comprobar->fetchall();
      foreach ($mostrar as $key => $value) {
        $cuenta_destino= $value[0];
      }

    if($cuenta_destino!=0){

      $transferencia=$database->prepare("call Transferir(?,?,?,NOW(),?,?)");
      $transferencia->execute(array($_POST['monto'],$_POST['id'],$_SESSION['ID'],$cuenta_destino,$_SESSION['NCUENTA']));
      $_SESSION['BALANCE']=$_SESSION['BALANCE']-$_POST['monto'];

    include("pagina.php");
      echo "
          <div class='alert alert-success alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
          <strong>La transaccion se ha realizado con éxito!</strong>
        </div>
        ";
    }else {
      include("pagina.php");
      echo "
      <div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
          <strong>No se han podido realizar la transaccion!</strong>
        </div>
        ";
    }
  }
    }
  }
?>
