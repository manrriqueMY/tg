<div class="row">
	<div class="col-md-8">
		<h3 class="titulo"><strong>Opciones de paquete</strong></h3>
		<br>
		<div class="panel panel-default bg-gray">
			<div class="panel-body">
				<h4><strong>Opciones de paquete</strong></h4>
				<br>
				<small>
			        <span></span>
			        <span>Selccione la fecha de Viaje</span>
			    </small>
			    <div class="input-group date btn btn-primary bg-azul">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				  	<input type="text" class="form-control" placeholder="Consultar Disponibilidad">
				</div>
				<br>
				<p>
					<small>
				        <span></span>
				        <span>Tipo de Paquete</span>
				    </small>
				</p>
			    <div class="row">
			    	<div class="col-md-8">
				    	<div class="form-group">
				    		<input type="radio" class="cargo" value="0" id="cargo0" name="cargo" checked>
				    		<label class="form-control" for="cargo0">Viaje compartido Guia en Ingles y Español</label>
				    	</div>
				    	<div class="form-group">
				    		<input type="radio" class="cargo" value="1" id="cargo1" name="cargo">
				    		<label class="form-control" for="cargo1">Viaje privado Guia en Ingles y Español</label>
				    	</div>
				    </div>
			    </div>
			    <br>
				<p>
					<small>
				        <span></span>
				        <span>Hora de Embarque</span>
				    </small>
				</p>
			    <div class="input-group time">
			    	<span class="input-group-addon"><i class="far fa-clock"></i></span>
				  	<select name="" id="" class="form-control">
				  		<option value="">Seleccionar</option>
				  	</select>
				</div>
				<br>
				<p>
					<small>
				        <span></span>
				        <span>Cantidad</span>
				    </small>
				</p>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="d-flex justify-content-between aling-items-center">
							<div>
								<p><b>Adulto</b></p>
								<p><small class="color-rojo">Requisito Mínimo</small></p>
							</div>
							<div class="d-flex aling-items-center">
								<h4><b class="azul mr-20">US$ 54.89 </b></h4>										
								<div class="input-group" style="max-width: 150px">
							    	<span class="input-group-addon"><i class="fas fa-minus"></i></span>
								  	<input type="number" class="form-control" value="1" min="0">
								  	<span class="input-group-addon"><i class="fas fa-plus"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="d-flex justify-content-between aling-items-center">
							<div class="d-flex aling-items-center">
								<p><b>Niño</b></p>
							</div>
							<div class="d-flex aling-items-center">
								<h4><b class="azul mr-20">US$ 54.89 </b></h4>										
								<div class="input-group" style="max-width: 150px">
							    	<span class="input-group-addon"><i class="fas fa-minus"></i></span>
								  	<input type="number" class="form-control" value="1" min="0">
								  	<span class="input-group-addon"><i class="fas fa-plus"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-end">
					<button class="btn btn-danger rojo prl-30"><i class="fas fa-cart-plus"></i> <b>Reservar Ahora</b></button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		@include('partial.opciones')
	</div>
</div>	