
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
        <h1>Reporte subasta</h1>
        <div id="company" class="clearfix">
        <div>Subasta productos, <br/>Subasta</div>
        <div><span>PROJECT</span></div>
        </div>
        <div id="project">
        <div><span>PROJECT</span>  Website development</div>
        <div><span></span>**************************************************</div>
        <div><span></span>**************************************************</div>
        </div>
    </header>
    <main>
    <table>
    <thead>
    <tr>
        <th class="service">Fecha inicial</th>
        <th class="service">Fecha final</th>
        <th class="service">Monto base </th>
        <th class="service">Estado actual</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php
            $auctions = $auction_model->all_auction();
            if ($auctions) {
                foreach ($auctions as $auction) {
                    require '../auctions/row_autions.php';
                }
            }
        ?>
    </tr>
   </tbody> 
   </table>
   </main>

</body>
</html>