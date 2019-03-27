<div class="container p-4">
    <div class="row">
        <div class="col-md-6" >
              <form method="POST">
                    <div class="form-group">
					<h1>Nombre del producto:</h1>
                    <div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="nombre" required value="">
                    </div>
                    <div class="form-group">
					<h1>Descripcion:</h1>
                    <div class="form-group">
					<input type="text" name="description" class="form-control" placeholder="description" 
                        required value="">
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

    <button type="submit" class="class_btn btn btn-primary">Guardar producto</button>
					<a href="../home_admin.php" class="class_a btn btn-danger">Cancelar</a>
                </form>
            </div>

        </div>
        </div>
    </div>
</div>