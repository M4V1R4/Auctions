<?php include("header.php")?>
<?php
	$title = 'Registro de productos';

	$descripcion = $_POST['descripcion'];
	$id_picture = $_POST['id_picture'];
	$id_admin = $_POST['id_admin'];

	$producto = ['descripcion' => $descripcion, 'id_picture' => $id_picture, 'id_admin' => $id_admin];
	

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
                    <input type="submit" class="btn btn-success btn-block" name= "save_task"
                    value="Guardar producto">
					<input type="submit" class="btn btn-danger btn-block" name= "Cancel"
                    value="Cancelar">
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