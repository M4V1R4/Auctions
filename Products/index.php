<?php 

require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/guard.php';
require_once '../shared/db.php';

//if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
//    return header('Location: /');
//}

//$producto = ['nombre' => $nombre, 'description' => $description, 'user' => $user];
$nombre = $_POST['nombre'] ?? '';
$description = $_POST['description'] ?? '';
	
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $user = $user_model->find($_SESSION['user_id']);
	$product_model->create($nombre, $description,$user['id']);
    return header('Location: index.php');
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