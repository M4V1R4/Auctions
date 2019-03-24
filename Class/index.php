<?php 

require_once '../shared/header.php';
require_once '../shared/sessions.php';

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    return header('Location: /');
}

$product_id= $product_model->find($_SESSION['user_id']);

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


<div class="container p-4">
    <div class="row">
        <div class="col-md-6" >
                <form action="saving_task.php">
                    <div class="form-group">
					<h1>Nombre del producto:</h1>
                        <input type="text" name="title" class="form-control" 
                        placeholder="Nombre del producto" autofocus>
                    </div>
                    <div class="form-group">
					<h1>Descripcion:</h1>
                        <textarea name="description" rows="2" class="form-control"
                        placeholder="Detalles del producto"></textarea>
                    </div>
                    <h1>Fotos:</h1>
                    <html>
	<form name="formu" id="formu" action="upload.php" method="post" enctype="multipart/form-data"
    class="float-right">
	   <dl>            
	        <dt><label>Archivos a Subir:</label></dt>
	        <dd><div id="adjuntos">
	        <input type="file" name="archivos[]"/><br />
	        </div></dd>
	   <dt><a href="#" onClick="addCampo()">Subir otro archivo</a></dt>      
	     </dl>
	</form> 
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
	
		<button type="submit" class="class_btn btn btn-primary" name="save_task"
					value="Guardar producto">Guardar producto</button>
					<a href="../index.php" class="class_a btn btn-danger">Cancelar</a>
                </form>
            </div>

        </div>
        </div>
    </div>
</div>


<!-- include("fooder.php") -->

</body>
</html>

</html>