<?php


function numero ($ID){
$id = $ID;
$hash = hash('sha512', $id);
$array ;
for ($i=0; $i < 49  ; $i++) {
  # code...
  $resultado = $hash/($i+1);
  $resultado = $resultado* 10;

  if($resultado >100 ){
    $resultado = $resultado /10;
  }

  if (empty($array)) {
    $array = array($resultado);
  }else{
    array_push($array, round($resultado));
  }
}
  return $array;
}

print_r(numero(2101));
 ?>
