<?php
include("database.php");
if ($_POST['pit']==null) {
  echo " no wn esta mal, ya es nula la wea";
  # code...
}
$agregar= $database->prepare("call Agregar_Cliente(?,?,?,?,?,?,?,?,?)");
$agregar->execute(array($_POST['monto'], $_POST['id'],$_POST['nombre'],$_POST['apellido'],  $_POST['direccion'],  $_POST['fono'], $_POST['email'],$_POST['pw'], $_POST['tarjeta'] ));

echo "quieres volver a ingresar otra persona?";
echo "<a href='agregar_cliente.php'>Otro</a>"
?>
