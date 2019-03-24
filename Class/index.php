<?php 

require_once '../shared/header.php';
require_once '../shared/sessions.php';

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    return header('Location: /');
}

//$product_id= $product_model->find($_SESSION['user_id']);

$description = $_POST['description'] ?? '';
$id_picture = $_POST['1'] ?? '';
$product_id = $_POST['product_id'] ?? '';

$producto = ['description' => $description, 'id_picture' => $id_picture, 'product_id' => $product_id];

	
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	require_once '../shared/db.php';
	$product_model->create($descripcion, $id_picture, $id_admin);
	return header('Location: ../index.php');
}
	
?>

<div class="container">
    <?php require_once 'form.php' ?>
</div>
 
<div class="container">
    <?php require_once 'javascript.php' ?>
</div>					


<!-- include("fooder.php") -->

</body>
</html>

</html>