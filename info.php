<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include("comprobar.php"); ?>
  </head>
  <body>
    <div id= "user">
    <a href="info.php" type="button" class="btn btn-default" onClick="getPages('response',this); return false">Info Usuario</a>
    <a href="config.php" type="button" class="btn btn-primary" onClick="getPages('response',this); return false">Cambiar Configuración</a>
    <a href="gd.php?id=<?php echo $_SESSION['IDCARD']?>"class="btn btn-danger" target="_blank">abrir Tarjeta</a>

    </div>


<h2>Informacion Actual en tu cuenta</h2>

    <div class="panel panel-default">
      <div class="panel-heading">Nombre completo :</div>
      <div class="panel-body">
        <?php echo " ".$_SESSION['NAME']." ".$_SESSION['LNAME']; ?>
      </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">Rut:</div>
    <div class="panel-body">
      <?php echo " ".$_SESSION['ID']; ?>
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">Correo:</div>
    <div class="panel-body">
      <?php echo " ".$_SESSION['MAIL']; ?>
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">Direccion:</div>
    <div class="panel-body">
      <?php echo " ".$_SESSION['ADDRESS']; ?>
    </div>
    </div>
  </body>
</html>
