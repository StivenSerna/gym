@extends('admin.template.main')

@section('tittle', 'Registrar miembro')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Registro de nuevo miembro
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
<!-- Page fin titulo -->

@endsection

@section('content')

<!-- Mostrar errores -->

@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>¡Error! </strong>
	@foreach($errors->all() as $error)

	<li>{!! $error !!}</li>

	@endforeach
</div>
@endif

<!-- Fin mostrar errores -->

{!! Form::open(['route'=>'admin.member.store', 'method'=>'POST', 'files' => true]) !!}

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user-plus"></i> Informacion personal</h3>
	</div>
	<div class="panel-body">


		<div class="row" >

			<div class="col-lg-6">

				<div class='form-group {{ $errors->has('first_name') ? 'has-error' : '' }} has-feedback'>
					{!! Form::label('first_name', 'Primer Nombre:', array('class' => 'control-label')) !!}
					{!! Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Primer Nombre ', 'aria-describedby'=> "inputError2Status"]) !!}
					@if ($errors->has('first_name'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="help-block">
						{{ $errors->first('first_name') }}
					</span>
					@endif
				</div>

				<div class="form-group">
					{!!Form::label('second_name', 'Segundo Nombre:')!!}
					{!!Form::text('second_name', null,['class'=>'form-control','placeholder'=>'Segundo Nombre'])!!}
				</div>

				<div class='form-group {{ $errors->has('last_name') ? 'has-error' : '' }} has-feedback'>
					{!! Form::label('last_name' ,'Apellidos:') !!}
					{!! Form::text('last_name', null,['class'=>'form-control','placeholder'=>'Apellidos', 'aria-describedby'=> "inputError2Status"]) !!}
					@if ($errors->has('last_name'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="help-block">
						{{ $errors->first('last_name') }}
					</span>
					@endif
				</div>

				<div class='form-group {{ $errors->has('document') ? 'has-error' : '' }} has-feedback'>
					{!! Form::label('document', 'Nº identificación:')!!}
					{!! Form::text('document', null,['class'=>'form-control', 'placeholder'=>'Nº identificación', 'aria-describedby'=> "inputError2Status"]) !!}
					@if ($errors->has('document'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="help-block">
						{{ $errors->first('document') }}
					</span>
					@endif
				</div>

				<div class="form-group">
					{!!Form::label('birthday', 'Fecha de Nacimiento:')!!}
					<div class='input-group date' date-provide='datepicker'>
						{!! Form::text('birthday', null, array('class'=>'form-control birthdate')) !!}
						<div class="input-group-addon">
							<span class='glyphicon glyphicon-th'></span>
						</div>
					</div>
				</div>

				<div class="form-group">
					{!!Form::label('email', 'Email:')!!}
					{!!Form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])!!}
				</div>

			</div>


			<div class="col-lg-6">

				<div class="row">

					<div class="col-xs-8 col-md-4">
						<a class="thumbnail">
							<img id="img_destino" src="http://placehold.it/171x180" alt="Foto">
						</a>
					</div>

					<div class="form-group">
						{!!Form::label('photo', 'Foto:')!!}
						{!! Form::file('photo',  array('id' => 'photo')) !!}
						<p class="help-block">Escoger una foto desde el ordenador.</p>
					</div>

				</div>

				<div class="form-group">
					{!!Form::label('gender', 'Genero:')!!}
					{!! Form::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null,  ['class' => 'form-control']) !!}
				</div>


				<div class='form-group {{ $errors->has('address') ? 'has-error' : '' }} has-feedback'>>
					{!!Form::label('address', 'Direccion:')!!}
					{!!Form::text('address', null,['class'=>'form-control','placeholder'=>'Direccion' , 'aria-describedby'=> "inputError2Status"])!!}
					@if ($errors->has('address'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="help-block">
						{{ $errors->first('address') }}
					</span>
					@endif
				</div>

				<div class="form-group">
					{!!Form::label('phone', 'Telefono:')!!}
					{!!Form::text('phone', null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
				</div>

				<div class="form-group">
					{!!Form::label('date_of_admission', 'Fecha de ingreso:')!!}
					<div class='input-group date'>
						{!! Form::text('date_of_admission', null, array('class'=>'form-control datepicker')) !!}
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

		format: "yyyy-mm-dd",
		language: "es",
		todayBtn: "linked",
		autoclose: true,
		orientation: "bottom left"
	});

	$('.birthdate').datepicker({
		format: "yyyy/mm/dd",
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

	$("#photo").change(function(){
		mostrarImagen(this);
	});

</script>

<br>



@endsection