<?php


    function datos ($ID){
    $id = $ID;
    $hash = hash('sha512', $id);
    $array ;
    for ($i=0; $i < 50  ; $i++) {
      # code...


      $resultado = $hash%(10*$i+1);


      $resultado = $resultado* 10;

      while($resultado >=100 ){
        $resultado = $resultado/10;
      }

      if (empty($array)) {
        $array = array(round($resultado));
      }else{
        array_push($array, round($resultado));
      }
    }
      return $array;
    }

    function AsciiToInt($char){
    $success = "";
        if(strlen($char) == 1)
            return ord($char);
        else{
            for($i = 0; $i < strlen($char); $i++){
                if($i == strlen($char) - 1)
                    $success = $success.ord($char[$i]);
                else
                    $success = $success.ord($char[$i]).",";
            }
            return $success;
        }
    }

    function submit($l1,$n1,$r1,$l2,$n2,$r2,$l3,$n3,$r3,$id){
    $uno =  revisar($l1,$n1,$r1,$id);
    if($uno==0){
      return 0;
    }else{
      $dos =  revisar($l2,$n2,$r2,$id);
      if($dos==0){
        return 0;
      }else{
        $tres =  revisar($l3,$n3,$r3,$id);
        if($tres==0){
          return 0;
        }else {
          return 1;
      }
    }
  }
}


    function revisar($letra , $numero,$resultado,$id){
      $arreglo = datos($id);
      $indice = AsciiToInt($letra);
      $indice -= 96;

      switch ($numero) {
        case '1':
          $minimo = 0;
          if( $arreglo[($minimo+$indice-1)] == $resultado){
            return 1;
          }else return 0;
          # code...
          break;
        case '2' :
          $minimo = 10;
          if( $arreglo[($minimo+$indice-1)] == $resultado){
            return 1;
          }else return 0;
          break;

        case '3' :
          $minimo = 20;
          if( $arreglo[($minimo+$indice-1)] == $resultado){
            return 1;
          }else return 0;
          break;

        case '4' :
          $minimo = 30;
          if( $arreglo[($minimo+$indice-1)] == $resultado){
            return 1;
          }else return 0;
          break;

        case '5' :
          $minimo = 40;
          if( $arreglo[($minimo+$indice-1)] == $resultado){
            return 1;
          }else return 0;

          break;
      }

    }
    function letrarandom ( ){
      return rand( 97 , 106 );
    }
    function numerorandom ( ){
      return rand( 1 , 5 );
    }
     ?>
