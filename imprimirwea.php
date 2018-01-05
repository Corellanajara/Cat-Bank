<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$html = file_get_contents("Cartola.php");
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->set_paper('a4', 'portrait');
$dompdf->render();
$dompdf->stream("descargar_mi_pdf.pdf", array("Attachment" => false));
 ?>
