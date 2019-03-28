<?php
    require_once '../shared/sessions.php';
    require_once '../shared/db.php';
    require_once '../shared/guard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reporte productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
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
    </tr>
    <?php
            $products = $product_model->all();
            if ($products) {
                foreach ($products as $product) {
                    require '../Products/row_report.php';
                }
            }
        ?>
    </thead>
    <tbody>
   
   </tbody> 
   </table>
   </main>

</body>
</html>