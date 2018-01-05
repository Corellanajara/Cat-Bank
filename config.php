<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include("comprobar.php");

     ?>
  </head>


  <div id= "user">
  <a href="info.php" type="button" class="btn btn-default" onClick="getPages('response',this); return false">Info Usuario</a>
  <a href="config.php" type="button" class="btn btn-primary" onClick="getPages('response',this); return false">Cambiar Configuración</a>
  <a href="gd.php?id=<?php echo $_SESSION['IDCARD']?>"class="btn btn-danger" target="_blank">abrir Tarjeta</a>
  </div>

</div>
</div>
<h2>Usa tu Contraseña para confirmar los cambios</h2>
<form action="arreglar.php" method="post">


  <div class="form-group">
    <label for="id">Nombre:</label>
    <input type="text" class="form-control" name="nombre" placeholder="<?php echo "".$_SESSION['NAME'];  ?>" value="<?php echo "".$_SESSION['NAME'];  ?>">
  </div>
  <div class="form-group" >
    <label for="email">Apellido:</label>
    <input type="text" class="form-control" name="apellido" placeholder="<?php echo $_SESSION['LNAME'] ?>" value="<?php echo $_SESSION['LNAME'] ?>">
  </div>
  <div class="form-group" >
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="<?php echo $_SESSION['MAIL'] ?>" value="<?php echo $_SESSION['MAIL'] ?>">
  </div>
  <div class="form-group">
    <label for="Comentario">Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="<?php echo $_SESSION['ADDRESS'] ?>" value="<?php echo $_SESSION['ADDRESS'] ?>">
  </div>
  <div class="form-group">
    <label for="Comentario">Numero Celular</label>
    <input type="text" class="form-control" name="fono" placeholder="<?php echo $_SESSION['PHONE'] ?>"value="<?php echo $_SESSION['PHONE'] ?>">
  </div>
  <div class="form-group">
    <label for="monto">Contraseña</label>
    <input type="password" class="form-control" name="pw" placeholder="Ingresa tu nueva contraseña">
  </div>
  <div class="form-group">
    <label for="monto">Contraseña</label>
    <input type="password" class="form-control" name="oldpw" placeholder="Pon tu contraseña antigua para confirmar cambios">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </body>
</html>
