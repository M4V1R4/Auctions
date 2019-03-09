<?php
require_once '../shared/db.php';
require_once '../shared/header.php';
?>
<div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<form method="POST">
			    <div class="col-12">
			    	<h1 style="color: #ffffff;">Registro</h1>
			    	<hr style="color: #ffffff;"/>
				</div>
			    <div class="form-group">
					<input type="text" name="first_name" class="form-control" placeholder="Nombre"  required value="">
				</div>
				<div class="form-group">
					<input type="text" name="last_name" class="form-control" placeholder="Apellido" required value="">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Correo electrónico" required value="">
				</div>
				<div class="form-group">
					    <input type="password" name="password" class="form-control" placeholder="Contraseña" required value="">
				</div>
				<div class="form-group">
					    <input type="password" name="password" class="form-control" placeholder="Repetir contraseña" required value="">
				</div>
				<button type="submit" class="btn btn-primary">Registrarse</button>
				<a href="/" class="btn btn-danger">Cancelar</a>
			</form>
		</div>
	</div>
</div>

<?php require_once '../shared/footer.php' ?>