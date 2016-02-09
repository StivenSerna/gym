@extends('admin.template.main')

@section('tittle', 'Registrar miembro')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Registro de nuevo miembro
</h1>
<ol class="breadcrumb">
	<li>
		<i class="fa fa-dashboard"></i> <a href="#">Inicio</a>
	</li>
	<li class="active">
		Registrar nuevo miembro
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

		<!-- comienzo form-->

		@include('member.forms.member_form_edit')

		<!-- Fin form-->

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
		orientation: "top right"
	});

	$('.birthdate').datepicker({
		format: "yyyy-mm-dd",
		startView: 2,
		language: "es",
		orientation: "bottom left",
		autoclose: true
	});
/*
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
*/
</script>

<br>



@endsection