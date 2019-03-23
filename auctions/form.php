<div class="container p-4">
    <div class="row">
        <div class="col-md-10" >
            <form method="POST">
				<div class="form-group row">
					<label class="col-2 col-form-label">Productos</label>	
					<div class="col-10">
						<select class="custom-select">
						  <option selected>Seleccione los productos</option>
						  <option value="1">One</option>
						  <option value="2">Two</option>
						  <option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
				  <label class="col-2 col-form-label">Fecha de inicio</label>
				  <div class="col-10">
				    <input class="form-control" type="date" value="aaaa-mm-dd" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label  class="col-2 col-form-label">Hora de inicio</label>
				  <div class="col-10">
				    <input class="form-control" type="time" value="00:00:00" id="" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label class="col-2 col-form-label">Fecha limite</label>
				  <div class="col-10">
				    <input class="form-control" type="date" value="aaaa-mm-dd" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label  class="col-2 col-form-label">Hora limite</label>
				  <div class="col-10">
				    <input class="form-control" type="time" value="00:00:00" id="" required>
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
							    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required> Creada
							</label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required> En progreso
							  </label>
							</div>
							<div class="form-check form-check-inline disabled">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option3" required> Finalizada
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
