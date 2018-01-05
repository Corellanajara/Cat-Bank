<?php
//include("comprobar.php");
include("claveTransferencia.php");
header("Content-Type: image/png");
$im = @imagecreatefrompng("images/catbank.png")
    or die("Cannot Initialize new GD image stream");
$color_fondo = imagecolorallocate($im, 0, 0, 0);
$color_texto = imagecolorallocate($im, 233, 14, 15);
$color_stroke = imagecolorallocate($im, 50, 50, 50);

$padding=55;
$width=60;
$valores = datos($_GET['id']);
$indice=-1;
for ($i=0; $i < 5; $i++) {
  for ($j=0; $j <10 ; $j++) {
        $indice++;
        imagestring($im, 70,$padding, $width,  $valores[$indice], $color_stroke);
        imagestring($im, 70,$padding-1, $width-1,  $valores[$indice], $color_texto);
        $padding+=32;
      }
        $width+=30;$padding=55;
}
imagepng($im);
imagedestroy($im);
?>
