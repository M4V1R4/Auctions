<?php
$title = 'Registro comprador';
require_once '../shared/header.php';
require_once '../shared/sessions.php';


$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$email = $_POST['email'] ?? '';
$is_admin = 'true';
$password = $_POST['password'] ?? '';
$buyer = ['first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'true' => $is_admin, 'password'=> $password];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $user_model->create($first_name, $last_name, $email, $is_admin, $password);
    return header('Location: ../home_admin.php');
}
?>

<div class="container">
    <?php require_once './form_admin.php' ?>
</div>

<?php require_once '../shared/footer.php' ?>