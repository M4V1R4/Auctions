<?php
$title = 'Editar subastas';
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$id    = $_GET['id'] ?? 0;
$start_date = $_POST['start_date'] ?? '';
$end_date = $_POST['end_date'] ?? '';
$base_amount = $_POST['base_amount'] ?? '';
$current_state = $_POST['current_state'] ?? '';

$auction = $auction_model->find($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auction_model->update($id, $start_date,$end_date,$base_amount,$current_state);
    return header('Location: /auctions');
}
?>

<div class="container">
    <h1><?=$title?></h1>

    <?php require_once './form.php' ?>
</div>

<?php require_once '../shared/footer.php' ?>