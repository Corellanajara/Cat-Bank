<?php

include("style.css");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>

</head>
<body>

<div class="container">
  <h2>Ingresa un pinche usuario</h2>
  <form action="listo.php" method="post">
    <div class="form-group" >
      <label for="text">Nombre:</label>
      <input type="text" class="form-control" name="nombre" placeholder="Ingresa El Nombre del usuario">
    </div>
    <div class="form-group" >
      <label for="apellido">Apellido:</label>
      <input type="text" class="form-control" name="apellido" placeholder="Ingresa apellido">
    </div>

    <div class="form-group" >
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Ingresa Email">
    </div>
    <div class="form-group">
      <label for="id">Rut:</label>
      <input type="text" class="form-control" name="id" placeholder="Ingresa rut del Cliente">
    </div>
    <div class="form-group" >
      <label for="pit">Id Tarjeta:</label>
      <input type="text" class="form-control" name="pit" placeholder="Ingresa apellido">
    </div>
    <div class="form-group">
      <label for="direccion">Direccion</label>
      <input type="text" class="form-control" name="direccion" placeholder="Direccion del cliente">
    </div>
    <div class="form-group">
      <label for="monto">Saldo</label>
      <input type="number" class="form-control" name="monto" placeholder="Ingrese el Saldo">
    </div>
    <div class="form-group">
      <label for="fono">Fono</label>
      <input type="text" class="form-control" name="fono" placeholder="fono">
    </div>
    <div class="form-group">
      <label for="pw">pw</label>
      <input type="text" class="form-control" name="pw" placeholder="Contraseña">
    </div>



    <button type="submit" class="btn btn-default">Aceptar</button>
  </form>

</div>






</body>
</html>
