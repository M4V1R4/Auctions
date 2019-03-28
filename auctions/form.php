<div class="container p-4">
    <div class="row">
        <div class="col-md-10" >
            <form method="POST">
				<div class="form-group row">
				  <label class="col-2 col-form-label">Fecha de inicio</label>
				  <div class="col-10">
				    <input class="form-control" name="start_date" type="date" value="<?=$auction['start_date']?>" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label class="col-2 col-form-label">Fecha limite</label>
				  <div class="col-10">
				    <input class="form-control" name="end_date" type="date" value="<?=$auction['end_date']?>" required>
				  </div>
				</div>
				<div class="form-group row">
					<label  class="col-2 col-form-label">Precio inicial</label>
					<div class="col-10">
					<input type="text" name="base_amount" class="form-control" placeholder="Monto base" value="<?=$auction['base_amount']?>" required>
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
							    <input class="form-check-input" type="radio" name="current_state" id="inlineRadio2" value="proceso" required > En progreso
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="current_state" value="finalizada" required > Finalizada
							  </label>
						</div>	
					</div>
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Aceptar">
    				<a href="/auctions" class="btn btn-danger">Cancelar</a>
				</div>
            </form>
        </div>
    </div>
</div>
