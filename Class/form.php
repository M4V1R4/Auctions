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