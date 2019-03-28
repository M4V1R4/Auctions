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
                        required vroalue="">
				    </div>    
                    <h1>Fotos:</h1>

                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
                        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
                    </head>
                    <body>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="" alt="Primera imagen">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.peru21.pe/files/article_content_ec_fotos/uploads/2018/12/01/5c02e309f33f3.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.peru21.pe/files/article_content_ec_fotos/uploads/2018/12/01/5c02e309f33f3.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    </body>
                    </html>
                    <html>
	<form name="formu" id="formu" action="upload.php" method="post" enctype="multipart/form-data"
    class="float-right">
	   <dl>            
	        <dt><label>Archivos a Subir:</label></dt>
	        <dd><div id="adjuntos">
	        <input type="file" name="archivos[]" class="file" accept="imagen/*" multiple/><br />
	        </div></dd>
	   <dt><a href="#" onClick="addCampo()">Subir otro archivo</a></dt>      
	     </dl>  
	</form> 
    <button type="submit" class="class_btn btn btn-primary">Guardar producto</button>
					<a href="./home.php" class="class_a btn btn-danger">Cancelar</a>
                </form>
            </div>

        </div>
        </div>
    </div>
</div>