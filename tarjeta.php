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



    //echo $var;
    $id = 10376;
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
          $posicion = chr($ascii);
          $ascii++;
          if($ascii>106){
            $ascii=97;
          }
          $posicion .=$i;

          $mostrar = $database->prepare("select ".$posicion." from Tarjeta where Id = $id ");
          $mostrar->execute();
          foreach ($mostrar as $key => $value) {
            # code...
            echo "| ".$value[0]." |";
          }
        }

      }


    }

  ?>



    </div>
  </body>
</html>
