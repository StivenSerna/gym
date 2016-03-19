<div class="row" >
	<div class="col-lg-12">
		<h5></h5>
		<div class="form-group">
			{!! Form::label('description', 'Descripcion:') !!}
			{!! Form::text('description', null,['class'=>'form-control','placeholder'=>'Descripcion: ']) !!}
		</div>
	</div>
</div>

<div class="row" >
	<div class="col-lg-4">
		<div class="input-group">

			<div class="form-group">
				{!! Form::label('price', 'Precio:') !!}
				{!! Form::text('price', null,['class'=>'form-control','placeholder'=>'Precio ']) !!}
			</div>
		</div>

	</div>

	<div class="col-lg-4">

		<div class="form-group">
			{!! Form::label('month', 'Meses:') !!}
			{!! Form::text('month', null,['class'=>'form-control','placeholder'=>'Meses ']) !!}
		</div>

	</div>

	<div class="col-lg-4">

		<div class="form-group">
			{!! Form::label('day', 'Dias:') !!}
			{!! Form::text('day', null,['class'=>'form-control','placeholder'=>'Dias ']) !!}

		</div>

	</div>


</div>

