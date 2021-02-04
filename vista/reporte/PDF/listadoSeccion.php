<?php

require_once(PDF.'tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('PNF en Informatica');
$pdf->SetTitle('Listado de Docentes');
$pdf->SetSubject('Impresion en TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->setCellPaddings(0,0,0,0);
$pdf->SetAutoPageBreak(TRUE, 0);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->AddPage();

$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

ob_start();

?>
<!-- TITULO -->
<?php 
$pdf->Cell(0, 0, 'Listado de Secciones', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'PNF Informatica', 0, 1, 'C', 0, '', 1);

?>
<h1></h1>
<div>
	<table border="1">
		<thead>
			<tr>
				
				<th style="text-align: center;">
					Lapso I
				</th>
				<th style="text-align: center;">
					Lapso II
				</th>
				<th style="text-align: center;">
					Cohorte
				</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</tbody>
	</table>
</div>
<?php

$html=ob_get_clean();
$pdf->writeHTML($html, true, 0, true, true);
$pdf->Output('Listado-Docentes.pdf', 'I');

?>