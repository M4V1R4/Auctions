<?php include("header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-6" >
                <form action="saving_task.php">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" 
                        placeholder="Nombre del producto" autofocus>
                    </div>
                    <div class="form-group">
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