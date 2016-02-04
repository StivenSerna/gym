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
			{!!Form::label('start', 'Filtrar por fecha de ingreso:')!!}
			<div class="input-daterange input-group" id="input-daterange">
				{!! Form::text('start', null, array('class'=>'input form-control', 'id' => 'input-daterange')) !!}
				<span class="input-group-addon">hasta</span>
				{!! Form::text('end', null, array('class'=>'input form-control', 'id' => 'input-daterange')) !!}
				<div class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="fa fa-search"></i> Filtrar</button>
				</div>
			</div>
		</div>

	</div>
</div>