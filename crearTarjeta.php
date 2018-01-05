<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">

</style>
  </head>
  <body>
    <?php
    include("Style.css");
    include("database.php");
    $nueva = rand(5000,15000);
    $crear = $database -> prepare("INSERT INTO `catbank`.`Tarjeta` (`Id`) VALUES ('".$nueva."')");
    $crear->execute();
    //echo $var;

    $letra = 'a';
    $ascii = 97;
    for ($i=0; $i < 6; $i++) {
    echo "<br>";
      for ($j=0; $j <11 ; $j++) {
        # code...
        if($i==0&&$j==0){
          echo "|| |";
        }
        if($i>0&&$j==0){
          echo "|| ".$i." |";
        }
        if($i==0&&$j>0){
          echo "| ".$letra." -  |";
          $letra++;
        }

        if($i>0&&$j>0){

          $var = rand( 0 , 50 );

          $posicion = chr($ascii);
          $ascii++;
          if($ascii>106){
            $ascii=97;
          }
          $posicion .=$i;
          //$p = parse_str($posicion);
          //echo $p;


          $actualizar = $database->prepare("UPDATE `catbank`.`Tarjeta` SET `".$posicion."`='".$var."'  WHERE Id='".$nueva."'  ");
          $actualizar->execute();
          echo "| ".$var." |";
        }

      }


    }

    echo " "
     ?>





    </div>
  </body>
</html>
