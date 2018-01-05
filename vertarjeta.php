<div id= "user">
<a href="info.php" type="button" class="btn btn-default" onClick="getPages('response',this); return false">Info Usuario</a>
<a href="config.php" type="button" class="btn btn-primary" onClick="getPages('response',this); return false">Cambiar Configuración</a>
<a href="verTarjeta.php" type="button" class="btn btn-success" onClick="getPages('response',this); return false">Ver Tarjeta</a>
</div>

  --|a--  || b--  ||c--  || d-- || e--|| f-- || g--|| h-- || i-- ||--j |

<?php

include_once("comprobar.php");
include("claveTransferencia.php");
$valores = datos($_SESSION['IDCARD']);
for ($i=0; $i <50 ; $i++) {

  if($i==0||$i==10||$i==20||$i==30||$i==40){

    echo "<br>";
    echo $i/10+1;
  }
  echo " |";
  echo $valores[$i];
  echo " |";
  # code...
}

 ?>
