<div class="container p-4">
    <div class="row">
        <div class="col-md-10" >
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
				<button type="submit" class="class_btn btn btn-primary">Registrar administardor</button>
				<a href="../home_admin.php" class="class_a btn btn-danger">Cancelar</a>
			</form>
		</div>
	</div>
</div>