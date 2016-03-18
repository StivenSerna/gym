@extends('admin.template.main')

@section('tittle', 'Registrar miembro')

@section('stylesheet')

<link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.standalone.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/datepicker/js/bootstrap-datepicker.js') }}"></script>

@endsection

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Registro
</h1>
<ol class="breadcrumb">
	<li>
		<a href="{{ route("inicio") }}"><i class="fa fa-dashboard"></i> Inicio</a>
	</li>
	<li>
		<a href="{{ route("admin.member.index") }}"><i class="fa fa-users"></i> Miembros</a>
	</li>
	<li class="active">
		<i class="fa fa-file-text-o"></i> Registrar miembro
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

<div class="thumbnail">
	<div class="portlet">

		<div class="portlet-title">
			<div class="caption">
				<p class="text-primary"><i class="fa fa-user-plus"></i> Informacion personal</p>
			</div>
		</div>

		<div class="portlet-body">
			<!-- comienzo form-->
			@include('member.forms.member_form_edit')
			<!-- Fin form-->
		</div><hr>

		<span class="pull-right">
			<a class="btn btn-danger" href="#" role="button">Cancelar</a>
			{!! Form::submit('Siguiente', ['class' => 'btn btn-success']) !!}
		</span>
		<div class="clearfix"></div>

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
</script>

<br>



@endsection