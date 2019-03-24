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
	require 'save_task';
	$product_model->create($descripcion, $id_picture, $id_admin);
	return header('Location: ../index.php');
}
	
?>

<div class="container">
    <?php require_once 'form.php' ?>
</div>
 
	<script type="text/javascript">
		var numero = 0; 
		evento = function (evt) { 
		   return (!evt) ? event : evt;
		}
		addCampo = function () { 
		   nDiv = document.createElement('div');
		   nDiv.className = 'archivo';
		   nDiv.id = 'file' + (++numero);
		   nCampo = document.createElement('input');
		   nCampo.name = 'archivos[]';
		   nCampo.type = 'file';
		   a = document.createElement('a');
		   a.name = nDiv.id;
		   a.href = '#';
		   a.onclick = elimCamp;
		   a.innerHTML = 'Eliminar';
		   nDiv.appendChild(nCampo);
		   nDiv.appendChild(a);
		   container = document.getElementById('adjuntos');
		   container.appendChild(nDiv);
		}
		elimCamp = function (evt){
		   evt = evento(evt);
		   nCampo = rObj(evt);
		   div = document.getElementById(nCampo.name);
		   div.parentNode.removeChild(div);
		}
		rObj = function (evt) { 
		   return evt.srcElement ?  evt.srcElement : evt.target;
		}
	</script> 					


<!-- include("fooder.php") -->

</body>
</html>

</html>