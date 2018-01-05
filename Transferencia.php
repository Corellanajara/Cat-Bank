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
  <h2>Haz Tu Transferencia aquí</h2>
  <form action="Transferir.php" method="post">
    <div class="form-group" >
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Ingresa Email">
    </div>

    <div class="form-group">
      <label for="id">Destinatario:</label>
      <input type="text" class="form-control" name="id" placeholder="Ingresa rut del destinatario">
    </div>
    <div class="form-group">
      <label for="Comentario">Comentarios</label>
      <input type="text" class="form-control" name="comentario" placeholder="Comentarios?">
    </div>
    <div class="form-group">
      <label for="monto">Monto</label>
      <input type="number" class="form-control" name="monto" placeholder="Ingrese el monto a Transferir">
    </div>


      <?php
      function letrarandom ( ){
        return rand( 97 , 106 );
      }
      function numerorandom ( ){
        return rand( 1 , 5 );
      }
      ?>

      <?php $letra1 = chr(letrarandom());?>
      <?php $numero1 = numerorandom();
      $resultado1 = $letra1;
      $resultado1 .= $numero1;?>
      <?php $letra2 = chr(letrarandom());?>
      <?php $numero2 = numerorandom();
      $resultado2 = $letra2;
      $resultado2 .= $numero2;?>
      <?php $letra3 = chr(letrarandom());?>
      <?php $numero3 = numerorandom();
      $resultado3 = $letra3;
      $resultado3 .= $numero3;?>

    <input placeholder="<?php echo $resultado1; ?>"  name="r1"  size="1"/>
    <input placeholder="<?php echo $resultado2  ?>" name="r2" size="1" />
    <input placeholder="<?php echo $resultado3  ?>" name="r3" size="1">
    <input type="hidden" name="l1" value="<?php echo $letra1 ?>">
    <input type="hidden" name="l2" value="<?php echo $letra2 ?>">
    <input type="hidden" name="l3" value="<?php echo $letra3 ?>">
    <input type="hidden" name="n1" value="<?php echo $numero1 ?>">
    <input type="hidden" name="n2" value="<?php echo $numero2 ?>">
    <input type="hidden" name="n3" value="<?php echo $numero3 ?>">






    <button type="submit" class="btn btn-default">Aceptar</button>
  </form>

  <div class="col-md-4">
      <div class="thumbnail">

          <img src="../assets/fancy_cat.jpg" alt="Nature" style="width:60%">
          <div class="caption">
            <p>La manera mas comoda de pagar tus cosas</p>
          </div>
        </a>
      </div>
    </div>
</div>






</body>
</html>
