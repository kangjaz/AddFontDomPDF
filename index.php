<?php

require_once('./vendor/autoload.php');

use Dompdf\Dompdf;

$pdf = new Dompdf();

$pdf->setPaper('A4', 'portrait');

$html = '<span style="font-family : alfa">KANGJAZ.COM</span>';

$pdf->loadHtml($html);

$pdf->render();

$pdf->stream('demo.pdf', ['Attachment' => false]);
