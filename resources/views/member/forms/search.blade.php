<div class="thumbnail">
	<div class="caption">
		<p></p>

		{!! Form::open(['route'=>'searchMember.document', 'method'=>'POST']) !!}
		<div class="form-group">

			<label for="documento">Buscar por documento </label>
			<div class="input-group">
				{!! Form::text('documento', null, array('class'=>'form-control', 'placeholder' => 'Documento')) !!}
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Buscar</button>
				</span>
			</div><!-- /input-group -->

		</div>
		{!! Form::close() !!}

		{!! Form::open(['route'=>'searchMember.name', 'method'=>'POST']) !!}
		<div class="form-group">

			<label for="nombre">Filtrar por nombre </label>
			<div class="input-group">
				{!! Form::text('nombre', null, array('class'=>'form-control', 'placeholder' => 'Nombre')) !!}
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Filtrar</button>
				</span>
			</div><!-- /input-group -->

		</div>
		{!! Form::close() !!}

		<!-- Search by range date -->
		{!! Form::open(['route'=>'searchMember.date', 'method'=>'POST']) !!}

		<div class="form-group">
			{!!Form::label('start', 'Filtrar por fecha de ingreso')!!}

			<div class="input-group" id="input-rangedate">

				{!! Form::text('start', null, array('class'=>'form-control input-rangedate')) !!}

				<span class="input-group-addon">hasta</span>

				{!! Form::text('end', null, array('class'=>'form-control input-rangedate')) !!}

				<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Filtrar</button>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>