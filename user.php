<!DOCTYPE html>
<?php  include("comprobar.php");?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id= "user">
    <a href="info.php" type="button" class="btn btn-default" onClick="getPages('response',this); return false">Info Usuario</a>
    <a href="config.php" type="button" class="btn btn-primary" onClick="getPages('response',this); return false">Cambiar Configuración</a>
    <a href="gd.php?id=<?php echo $_SESSION['IDCARD']?>"class="btn btn-danger" target="_blank">abrir Tarjeta</a>

    </div>


<div id="response"></div>
  </body>

</html>
