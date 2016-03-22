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
	<strong>Información:</strong> Puede modificar la ficha medica desde el
	<a class="alert-link" href="{!! route("admin.member.show", $member->id) !!}">perfil</a> en cualquier momento.
</div>

<div class="thumbnail">
	<div class="portlet">
		{!! Form::open(['route'=>'medicalrecord.store', 'method'=>'POST']) !!}

		{!! Form::hidden('member_id', $member->id) !!}
		<div class="portlet-title">
			<div class="actions pull-right">

			</div>
			<div class="caption">
				<p class="text-primary"><i class="fa fa-medkit"></i> Información medica</p>
			</div>
		</div>
		<div class="thumbnail-collapse collapse in">
			<div class="portlet-body">
				@include('medicalrecord.forms.medicalrecord_form_edit')
				<hr>
				<span class="pull-right">
					<a class="btn btn-danger" href="{!! route("admin.member.show", $member->id) !!}" role="button">Cancelar</a>
					{!! Form::submit('Siguiente', ['class' => 'btn btn-success']) !!}
				</span>
				<div class="clearfix"></div>
			</div>
		</div>

		{!! Form::close() !!}
	</div>
</div>

@endsection