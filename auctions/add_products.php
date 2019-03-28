<?php
$title = 'Agregar productos a subastas';
require_once '../shared/sessions.php';
require_once '../shared/header.php';
require_once '../shared/guard.php';
require_once '../shared/db.php';

if(isset($_POST['btn_enviar'])){
    if($_POST['chk'] != ""){
        $array_chk = $_POST['chk'];
        foreach ($array_chk as $products => $id_product) {
            $auction_model->create_auction_products($_GET['id'], $id_product);
        }
    }
}
?>

<div class="container">
    <form method="POST">
        <h1>Agregar productos a subasta</h1>
        <div class="form-group">
            <input class="btn btn-primary" name="btn_enviar"type="submit" value="Guardar">
                <a href="/auctions" class="btn btn-danger">Cancelar</a>
        </div>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Seleccionar</th>
            </tr>
            <?php
                $user = $user_model->find($_SESSION['user_id']);
                $products = $auction_model->all_products($user['id']);
                if ($products) {
                    foreach ($products as $product) {
                        require './product_row.php';
                    }
                } 
            ?>
        </table>
    </form>
</div>

<?php require_once '../shared/footer.php' ?>