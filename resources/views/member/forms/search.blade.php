<div class="thumbnail">
	<div class="caption">
		<p></p>

		{!! Form::open(['route'=>'admin.member.search', 'method'=>'POST']) !!}
		<div class="form-group">

			<label for="documento">Buscar por documento: </label>
			<div class="input-group">
				{!! Form::text('documento', null, array('class'=>'form-control', 'placeholder' => 'Documento')) !!}
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Buscar</button>
				</span>
			</div><!-- /input-group -->

		</div>
		{!! Form::close() !!}

		{!! Form::open(['route'=>'admin.member.search', 'method'=>'POST']) !!}
		<div class="form-group">

			<label for="nombre">Filtrar por nombre: </label>
			<div class="input-group">
				{!! Form::text('nombre', null, array('class'=>'form-control', 'placeholder' => 'Nombre')) !!}
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Filtrar</button>
				</span>
			</div><!-- /input-group -->

		</div>
		{!! Form::close() !!}

		{!! Form::open(['route'=>'admin.member.search', 'method'=>'POST']) !!}
		<div class="form-group">

			<label for="apellido">Filtrar por apellido: </label>
			<div class="input-group">
				{!! Form::text('apellido', null, array('class'=>'form-control', 'placeholder' => 'Apellido')) !!}
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Filtrar</button>
				</span>
			</div><!-- /input-group -->

		</div>
		{!! Form::close() !!}

		{!! Form::open(['route'=>'admin.member.search', 'method'=>'POST']) !!}
		<div class="form-group">
			{!!Form::label('start', 'Filtrar por fecha de ingreso:')!!}
			<div class="input-daterange input-group" id="input-daterange">
				{!! Form::text('start', null, array('class'=>'input form-control', 'id' => 'input-daterange')) !!}
				<span class="input-group-addon">hasta</span>
				{!! Form::text('end', null, array('class'=>'input form-control', 'id' => 'input-daterange')) !!}
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Filtrar</button>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>