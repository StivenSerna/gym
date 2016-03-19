<div class="row" >

	<div class="col-lg-12">

		<h5></h5>

		<div class="form-group">
			{!!Form::label('type', 'Tipo')!!}
			{!! Form::select('type', array('inflow' => 'Ingreso', 'outflow' => 'Egreso'), 'payment', ['class' => 'form-control', 'id' => 'typeID']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('description', 'Descripción') !!}
			{!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Descripción', 'rows' => '4']) !!}
		</div>


	</div>

</div>


<div class="row" >

	<div class="col-md-12">

		<div class="form-group">
			{!!Form::label('amount', 'Monto')!!}
			<div class="input-group">
				<div class="input-group-addon">$</div>
				{!! Form::number('amount', null, ['class' => 'form-control', 'id' => 'amount', 'required' => true]); !!}
			</div>
		</div><br>

	</div>

</div>

<div class="row">
	<div class="col-md-12">
		<span id="spanAmount"> - </span>
	</div>
</div>