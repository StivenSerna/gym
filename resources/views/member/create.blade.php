@extends('admin.template.main')

@section('tittle', 'Registro')

@section('content')

<!-- Page titulo -->

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			REGISTRO DE USUARIOS  
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Inicio
			</li>
		</ol>
	</div>
</div>

<!-- Page fin titulo -->

{!! Form::open(['route'=>'member.index','method'=>'POST']) !!}


<div class="row" >

	<div class="col-lg-5">

		<div class="form-group">
			{!! Form::label('Nº identificación:')!!}
			{!!Form::text('identification', null,['class'=>'form-control','placeholder'=>'Nº identificación'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('Primer Nombre:')!!}
			{!!Form::text('firstname', null,['class'=>'form-control','placeholder'=>'Primer Nombre '])!!}
		</div>


		<div class="form-group">
			{!!Form::label('Segundo Nombre:')!!}
			{!!Form::text('secondname', null,['class'=>'form-control','placeholder'=>'Segundo Nombre'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('Apellidos:')!!}
			{!!Form::text('lastname', null,['class'=>'form-control','placeholder'=>'Apellidos'])!!}
		</div>


		<div class="form-group">
			{!!Form::label('Fecha de Nacimiento:')!!}
			<div class='input-group date' date-provide='datepicker'>
				{!! Form::text('birthdate', null, array('class'=>'form-control', 'id' => 'datepicker')) !!}
				<div class="input-group-addon">
					<span class='glyphicon glyphicon-th'></span>
				</div>
			</div>
		</div>

		<div class="form-group">
			{!!Form::label('Email:')!!}
			{!!Form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])!!}
		</div>

	</div>
	<br>


	<div class="col-lg-5">

		<div class="form-group">
			<br><br><br><br><br><br>
		</div>

		
		<div class="form-group">
			{!!Form::label('Genero:')!!}
			{!! Form::select('size', array('M' => 'Masculino', 'F' => 'Femenino'), null, ['class' => 'form-control']) !!}
		</div>
		

		<div class="form-group">
			{!!Form::label('Direccion:')!!}
			{!!Form::text('direction', null,['class'=>'form-control','placeholder'=>'Direccion'])!!}
		</div>
		
		<div class="form-group">
			{!!Form::label('Telefono:')!!}
			{!!Form::text('phone', null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('Fecha de ingreso:')!!}
			<div class='input-group date'>
				{!! Form::text('date-of-admission', null, array('class'=>'form-control datepicker', 'id' => 'datepicker')) !!}
				<div class="input-group-addon">
					<span class='glyphicon glyphicon-th'></span>
				</div>
			</div>
		</div>



		
		<div class="col-lg-2 col-lg-offset-9 ">

			{!!Form::submit('Siguiente', ['class' => 'btn btn-success'])!!}
		</div>


	</div>

	
	
	
</div>
{!! Form::close() !!}

		<script type='text/javascript'>
			$('.datepicker').datepicker({

				format: "dd/mm/yyyy",
				language: "es",
				autoclose: true,
				orientation: "bottom left"
			});

		</script>
<br>



@endsection