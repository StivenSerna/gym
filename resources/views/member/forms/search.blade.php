<div class="thumbnail">
	<div class="caption">
		<p></p>

		<div class="form-group">

			<label for="documento">Buscar por documento: </label>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Documento ID" id="ducumento">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="fa fa-search"></i> Buscar</button>
				</span>
			</div><!-- /input-group -->

		</div>

		<div class="form-group">

			<label for="documento">Filtrar por nombre: </label>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Documento ID" id="ducumento">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="fa fa-search"></i> Filtrar</button>
				</span>
			</div><!-- /input-group -->

		</div>
		<div class="form-group">

			<label for="documento">Filtrar apellido: </label>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Documento ID" id="ducumento">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="fa fa-search"></i> Filtrar</button>
				</span>
			</div><!-- /input-group -->

		</div>
		<div class="form-group">

			<div class="form-group">
				{!!Form::label('date_of_admission', 'Filtrar por fecha de ingreso:')!!}
				<div class='input-group date'>
					{!! Form::text('date_of_admission', null, array('class'=>'form-control', 'id' => 'datepicker')) !!}
					<div class="input-group-btn">
						<button class="btn btn-default" type="button"><i class="fa fa-search"></i> Filtrar</button>
					</div>
				</div>
			</div>

		</div>


	</div>
</div>