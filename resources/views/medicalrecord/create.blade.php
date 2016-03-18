@extends('admin.template.main')

@section('tittle', 'Ficha medica')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Información medica
</h1>
<ol class="breadcrumb">
	<li>
		<a href="{{ route("inicio") }}"><i class="fa fa-dashboard"></i> Inicio</a>
	</li>
	<li>
		<a href="{{ route("admin.member.index") }}"><i class="fa fa-users"></i> Miembros</a>
	</li>
	<li>
		<a href="{{ route("admin.member.show", $member->id) }}"><i class="fa fa-user"></i> Perfil <span class="text-capitalize">{!! $member->first_name!!}</span></a>
	</li>
	<li class="active">
		<i class="fa fa-list-ol"></i> Registrar información medica
	</li>
</ol>
<!-- end Page titulo -->

@endsection

@section('content')

<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Información:</strong> Puede modificar la ficha medica desde el modulo de miembros en cualquier momento.
</div>

{!! Form::open(['route'=>'medicalrecord.store', 'method'=>'POST']) !!}

{!! Form::hidden('member_id', $member->id) !!}

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-medkit"></i> Informacion medica</h3>
	</div>
	<div class="panel-body">


	@include('medicalrecord.forms.medicalrecord_form_edit')

	</div>

	<div class="panel-footer">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="button-group">
							<a class="btn btn-danger btn-block" href="{!! route("admin.member.show", $member->id) !!}" role="button">Cancelar</a>
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
<br>



@endsection