<?php include("header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <div class="card card-body">
            <!-- Aqui es la funcion para que el boton envie el formulario del los datos de los task -->
                <form action="saving_task.php">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" 
                        placeholder="Nombre del producto" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control"
                        placeholder="Detalles del producto"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name= "save_task"
                    value="Guardar producto">

                </form>
            </div>

        </div>

        <div class="col-md-8">
        
        </div>

    </div>
</div>

<?php include("fooder.php")?>