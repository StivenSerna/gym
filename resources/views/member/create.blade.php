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

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user-plus"></i> Informacion personal</h3>
	</div>
	<div class="panel-body">


		<div class="row" >

			<div class="col-lg-6">

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
						{!! Form::text('birthdate', null, array('class'=>'form-control birthdate')) !!}
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


			<div class="col-lg-6">

				<div class="row">

					<div class="col-xs-6 col-md-3">
						<a class="thumbnail">
							<img id="img_destino" src="http://placehold.it/171x180" alt="Foto">
						</a>
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Foto:</label>
						<input type="file" id="file_url" name="foto">
						<p class="help-block">Escoger una foto desde el ordenador.</p>
					</div>

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
						{!! Form::text('date-of-admission', null, array('class'=>'form-control datepicker')) !!}
						<div class="input-group-addon">
							<span class='glyphicon glyphicon-th'></span>
						</div>
					</div>
				</div>

			</div>



		</div>

	</div>

	<div class="panel-footer">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="button-group">
						<a class="btn btn-danger btn-block" href="#" role="button">Cancelar</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="button-group">
							{!! Form::submit('Siguiente', ['class' => 'btn btn-success btn-block']) !!}
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>

</div>



{!! Form::close() !!}

<script type="text/javascript">
	$('.datepicker').datepicker({

		format: "dd/mm/yyyy",
		language: "es",
		todayBtn: "linked",
		autoclose: true,
		orientation: "bottom left"
	});

	$('.birthdate').datepicker({
		format: "dd/mm/yyyy",
		startView: 2,
		language: "es",
		orientation: "bottom left",
		autoclose: true
	});

	function mostrarImagen(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#img_destino').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#file_url").change(function(){
		mostrarImagen(this);
	});

</script>

<br>



@endsection