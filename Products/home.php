<?php

$title = 'Productos'; 
require_once '../shared/sessions.php';
require_once '../shared/header.php';
require_once '../shared/guard.php';
require_once '../shared/db.php';

?>

<div class="container">
    <h1>Productos</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Codigo creador</th>
            <th>
                <a href="/Products/index.php" class="btn btn-success">Agregar productos</a>
            </th>
        </tr>
        <?php
            $products = $product_model->all();
            if ($products) {
                foreach ($products as $product) {
                    require './row.php';
                }
            }
        ?>
    </table>
</div>