<?php
  include("comprobar.php");
  echo "<h1>CatBank</h1>";
  $cartola = $database->prepare("select * from Cartola where Cuenta_Ncuenta = '".$_SESSION['NCUENTA']."'");
  $cartola->execute();

  $mostrar = $cartola->fetchall();

  $total = $database->prepare("select count(*) from Cartola where Cuenta_Ncuenta= '".$_SESSION['NCUENTA']."' ");
  $total->execute();
  $mostratTotal = $total->fetchall();

  foreach ($mostratTotal as $key => $value) {
    $todos = $value[0];
  }

  echo " <table border = '1' class='table table-hover'> \n";

  echo "<tr><td>Fecha</td><td>Cargo</td><td>Abono</td></tr> \n";
  $cantidad = 0;
  $tope = 10 ;
  foreach ($mostrar as $key => $value) {
    echo "<tr><td>$value[0]</td><td>$value[4]</td><td>$value[5]</td></tr> \n" ;

    # code...
  }


  echo "</table> \n";

 ?>
