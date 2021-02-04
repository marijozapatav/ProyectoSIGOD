<?php

require_once(PDF.'tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('PNF en Informatica');
$pdf->SetTitle('Horario Docente');
$pdf->SetSubject('Impresion en TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->AddPage('P','A3');

$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

ob_start();

?>


<h5 style="text-align: center;">
    HORARIO DEL PERSONAL DOCENTE
</h5>
<table border="1" style="font-size: 10px; width: 100%;margin: 0px;padding: 2px;">
    <tr>
        <td>
            1.PNF CARRERA
        </td>
        <td colspan="3">
        </td>
        <td>
            2.LAPSO
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            3.PROFESOR(A)
        </td>
        <td colspan="3">
        </td>
        <td>
            4.CEDULA
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            5.DEDICACIÓN
        </td>
        <td>
        </td>
        <td>
            6.CONDICIÓN
        </td>
        <td>
        </td>
        <td>
            7.CATEGORIA
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td rowspan="2">
            8.TITULO DE PREGRADO
        </td>
        <td colspan="2" rowspan="2">
        </td>
        <td rowspan="2">
            9.POSTGRADO
        </td>
        <td colspan="2" rowspan="2">
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
</table>
<h5 style="text-align: center;">
    ACTIVIDADES ACADEMICAS
</h5>
<table border="1" style="font-size: 10px; width: 100%;margin: 0px;padding: 2px;">
    <tr>
        <td colspan="2">
            10.Unidad Curricular
        </td>
        <td>
            11.Codigo
        </td>
        <td>
            12.Seccion
        </td>
        <td>
            13.Ambiente
        </td>
        <td colspan="2">
            14.Eje
        </td>
        <td>
            15.Fase
        </td>
    </tr>
    <tr>
        <td colspan="2">
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td colspan="2">
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td colspan="2">
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td colspan="2">
        </td>
        <td>
        </td>
    </tr>
</table>
<h5 style="text-align: center;">
    CREACION INTELECTUAL, INTEGRACION COMUNIDAD, GESTION ACADEMICA, Y OTRAS ACTIVIDADES
</h5>
<table border="1" style="font-size: 10px; width: 100%;margin: 0px;padding: 2px;">
    <tr>
        <td>
            16.Tipo de Actividad
        </td>
        <td>
            17.Descripcion
        </td>
        <td>
            18.Dependencia
        </td>
    </tr>
    <tr>
        <td>
            CREACION INTELECTUAL
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            INTEGRACION COMUNIDAD
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            GESTION ACADEMICA
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            OTRAS ACT. ACADEMICAS
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
</table>
<table style="padding-top: 10px;">
    <tr>
        <td>
            <h5>
                19.HORARIO
            </h5>
        </td>
        <td>
            <h5>
                Mañana
            </h5>
        </td>
    </tr>
</table>
<table border="1" style="font-size: 10px; width: 100%;margin: 0px;padding: 2px;">
    <tr>
        <td>
            Hora
        </td>
        <td>
            Lunes
        </td>
        <td>
            Martes
        </td>
        <td>
            Miercoles
        </td>
        <td>
            Jueves
        </td>
        <td>
            Viernes
        </td>
        <td>
            Sabado
        </td>
        <td>
            Observacion
        </td>
    </tr>
    <tr>
        <td>
            7:20 a 8:05
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            8:05 a 8:50
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            8:55 a 9:40
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            9:40 a 10:25
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            10:30 a 11:15
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            11:15 a 12:00
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
</table>
<h5 style="text-align: center;">
    Tarde
</h5>
<table border="1" style="font-size: 10px; width: 100%;margin: 0px;padding: 2px;">
    <tr>
        <td>
            1:20 a 2:05
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            2:05 a 2:50
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            2:55 a 3:40
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            3:40 a 4:25
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            4:30 a 5:15
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            5:15 a 6:00
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
</table>
<h5 style="text-align: center;">
    Noche
</h5>
<table border="1" style="font-size: 10px; width: 100%;margin: 0px;padding: 2px;">
    <tr>
        <td>
            6:00 a 6:45
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            6:45 a 7:30
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            7:30 a 8:15
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            8:15 a 9:00
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            9:00 a 9:45
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
</table>
<h5 style="text-align: left;">
    20.Observaciones
</h5>
<table border="1" style="font-size: 10px; width: 100%;margin: 0px;padding: 2px;">
    <tr>
        <td colspan="2">
            21.TOTAL(Horas Clases + Horas Adm)
        </td>
        <td style="text-align: center;">
            0
        </td>
        <td colspan="2">
            22.Firma del Profesor
        </td>
        <td colspan="2" style="text-align: center;">
            24.Vo Bo (Coordinador de PNF o Jefe Dpto)
            Firma y Sello
        </td>
    </tr>
    <tr>
        <td colspan="2">
            21.1 Horas de Clases
        </td>
        <td>
        </td>
        <td colspan="2" rowspan="4">
        </td>
        <td colspan="2" rowspan="6">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            21.2 Cracion Intelectual (CI)
        </td>
        <td>
        </td>
        <td colspan="2">
        </td>
        <td colspan="2">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            21.3 Integracion Comunidad (IC)
        </td>
        <td>
        </td>
        <td colspan="2">
        </td>
        <td colspan="2">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            21.4 Asesoria Academica (AA)
        </td>
        <td>
        </td>
        <td colspan="2">
        </td>
        <td colspan="2">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            21.5 Gestion Academica (GA)
        </td>
        <td>
        </td>
        <td rowspan="2">
            23.FECHA:
        </td>
        <td rowspan="2">
        </td>
        <td colspan="2">
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            21.6 Otras Act. Academicas (OAA)
        </td>
        <td>
        </td>
        <td colspan="2">
        </td>
        <td colspan="2">
        </td>
    </tr>
</table>
<p style="text-align: left;">
    Las horas academicas y de asesoria se computan a razon de 45 minutos.
</p>

<?php

$html=ob_get_clean();
$pdf->writeHTML($html, true, 0, true, true);
$pdf->Output('Horario-docente.pdf', 'I');

?>