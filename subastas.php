<?php
$title = 'Subastas';
require_once '../shared/sessions.php';
require_once '../shared/header.php';
require_once '../shared/guard.php';
require_once '../shared/db.php';
?>

<div class="container">
    <h1>Subastas</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Id</th>
            <th>Fecha inicial</th>
            <th>Fecha final</th>
            <th>Monto inicial</th>
            <th>Estado actual</th>
            <th>Agregar productos</th>
        </tr>
        <?php
            $user = $user_model->find($_SESSION['user_id']);
            $auctions = $auction_model->all($user['id']);
            if ($auctions) {
                foreach ($auctions as $auction) {
                    require './row.php';
                }
            }
        ?>
    </table>
</div>

<?php require_once '../shared/footer.php' ?>