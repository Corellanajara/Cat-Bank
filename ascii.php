<?php

include("comprobar.php");
include("claveTransferencia.php");

$uno =  revisar($_POST['l1'],$_POST['n1'],$_POST['r1'],$_SESSION['IDCARD']);
if($uno==0){
  echo " rechazado!!!";
}else{
  $dos =  revisar($_POST['l2'],$_POST['n2'],$_POST['r2'],$_SESSION['IDCARD']);
  if($dos==0){
    echo " rechazado!!!!";
  }else{
    $tres =  revisar($_POST['l3'],$_POST['n3'],$_POST['r3'],$_SESSION['IDCARD']);
    if($tres==0){
      echo " rechazado!!!";
    }else echo "bien ha sido verificado y la wea";
  }
}

?>
