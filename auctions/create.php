<?php
$title = 'Crear subasta';
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/guard.php';
require_once '../shared/db.php';

$start_date = $_POST['start_date'] ?? '';
$end_date = $_POST['end_date'] ?? '';
$base_amount = $_POST['base_amount'] ?? '';
$current_state = $_POST['current_state'] ?? '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $user_model->find($_SESSION['user_id']);
    $auction_model->create($start_date, $end_date, $base_amount, $current_state,$user['id']);
    return header('Location: /auctions/create.php');
}
?>
<div class="container">
    <h1><?=$title?></h1>
    <?php require_once './form.php' ?>
</div>

<?php require_once '../shared/footer.php' ?>