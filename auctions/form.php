<div class="container p-4">
    <div class="row">
        <div class="col-md-10" >
            <form method="POST">
				<div class="col-12">
			    	<h1 style="color: #707070;">Añadir nueva subasta</h1>
			    	<hr style="color: #303030;"/>
				</div>
				<div class="form-group row">
				  <label class="col-2 col-form-label">Fecha de inicio</label>
				  <div class="col-10">
				    <input class="form-control" name="start_date" type="date" value="" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label  class="col-2 col-form-label">Hora de inicio</label>
				  <div class="col-10">
				    <input class="form-control" name="start_time" type="time" value="00:00:00" id="" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label class="col-2 col-form-label">Fecha limite</label>
				  <div class="col-10">
				    <input class="form-control" name="end_date" type="date" value="" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label  class="col-2 col-form-label">Hora limite</label>
				  <div class="col-10">
				    <input class="form-control" name="end_time" type="time" value="00:00:00" id="" required>
				  </div>
				</div>
				<div class="form-group row">
					<label  class="col-2 col-form-label">Precio inicial</label>
					<div class="col-10">
					<input type="text" name="base_amount" class="form-control" placeholder="Monto base"  required>
					</div>
				</div>
				<div class="form-group row">
					<label  class="col-2 col-form-label">Estado</label>
					<div class="col-10">
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							    <input class="form-check-input" type="radio" name="current_state" id="inlineRadio1" value="creada" required checked> Creada
							</label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="current_state" id="inlineRadio2" value="proceso" required disabled> En progreso
							  </label>
							</div>
							<div class="form-check form-check-inline disabled">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="current_state" value="finalizada" required disabled> Finalizada
							  </label>
						</div>	
					</div>
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Crear subasta">
    				<a href="/home_admin.php" class="btn btn-danger">Cancelar</a>
				</div>
            </form>
        </div>
    </div>
</div>
