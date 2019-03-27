<?php
$title = 'Actualizacion de productos';
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$id    = $_GET['id'] ?? 0;
$nombre = $_POST['nombre'] ?? '';
$description  = $_POST['description'] ?? '';
$id_admin  = $_POST['id_admin'] ?? '';

$product = $product_model->find($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_model->update($nombre, $description, $id_admin);
    return header('Location: Products/home.php');
}
?>

<div class="container">
    <h1><?=$title?></h1>

    <?php require_once './estructura.php' ?>
</div>

<?php require_once '../shared/footer.php' ?>