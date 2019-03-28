<?php

require '../vendor/autoload.php'; 
require_once '../shared/sessions.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$html = '<header>
<h1>Reporte productos</h1>
<div id="company" class="clearfix">
<div>Subasta productos, <br/>Subasta</div>
<div>Contacto   </div>
<div><a href="mailto:company@example.com">nelsonandresmj@gmail.com</a></div>
</div>
<div id="project">
<div><span>PROJECT</span>  Website development</div>
<div><span>CLIENT</span>  Nelson mora</div>
<div><span>ADDRESS</span> Naranjo costa rica</div>
<div><span>EMAIL</span>nelsonandresmj@gmail.com</div>
<div><span>************************************************</div>
</div>
</header>
<main>
<table>
<thead>
<tr>
<th class="service">SERVICE</th>
<th class="desc">DESCRIPTION</th>
<th>PRECIO</th>
</tr>';

    $products = $product_model->all();
    if ($products) {
        foreach ($products as $product) {
            require '../Products/row_report.php';
        }
    }

$html .= '</thead>
<tbody>

</tbody> 
</table>
</main>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>