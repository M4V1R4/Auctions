<?php
$title = 'Crear subasta';
require_once '../shared/header.php';
require_once '../shared/sessions.php';


$start_date = $_POST['2000-02-02'] ?? '';
$start_time = $_POST['start_time'] ?? '';
$end_date = $_POST['2001-03-04'] ?? '';
$end_time = $_POST['end_time'] ?? '';
$base_amount = $_POST['base_amount'] ?? '';
$current_state = $_POST['creada'] ?? '';
$auction = ['2000-02-02' => $start_date, '2001-03-04' => $end_date, 'base_amount' => $base_amount,'creada' => $current_state ];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $auction_model->create($start_date, $end_date, $base_amount, $current_state);
    return header('Location: ../home_admin.php');
}
?>
<div class="container">
    <?php require_once './form.php' ?>
</div>

<?php require_once '../shared/footer.php' ?>