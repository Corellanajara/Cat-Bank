<?php

include("database.php");


$revisar  = $database->prepare("SELECT ".$_POST['n1'].",".$_POST['n2'].",".$_POST['n3']."  FROM Tarjeta where Id = '2101'");
$revisar->execute();
foreach ($revisar as $key => $value) {
  echo " ".$_POST['v1']." ".$value[0];
  echo " ".$_POST['v2']." ".$value[1];
  echo " ".$_POST['v3']." ".$value[2];
  if($_POST['v1']==$value[0] && $_POST['v2']==$value[1] && $_POST['v3']==$value[2] ){
    echo " esta lista la transferencia! alfiiiin";

  }else echo " mal mal mal";
  # code...
}

?>
