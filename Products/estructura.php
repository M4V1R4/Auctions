<form method="POST">
    <div class="form-group">
        <label>Nombre: </label>
        <input type="text" name="nombre" class="form-control" required value="<?=$product['nombre']?>">
    </div>
    <div class="form-group">
        <label>Descripcion: </label>
        <input type="num" name="Description" class="form-control" required value="<?=$product['description']?>">
    </div>
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a href="/cars" class="btn btn-danger">Cancelar</a>
</form>