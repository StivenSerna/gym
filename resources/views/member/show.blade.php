@extends('admin.template.main')

@section('tittle', 'Perfil')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Perfil
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
@endsection

@section('content')


<div class="well well-sm">
	<div class="row">
		<div class="col-md-3 col-md-offset-4">
			<div class="thumbnail">
				<img src='{{'../../images/members/'}}{{ isset($member->image->name) ? $member->image->name : 'fotogym_placeholder.png' }}' class="">
				<button type="button" data-toggle="modal" class="btn btn-primary btn-xs" data-target="#fotoedit">
					<i class="fa fa-camera"></i>
					Cambiar
				</button>
			</div>
			<h3 class="text-center">{!! ucfirst($member->first_name) ." ". ucfirst($member->second_name) ." ". ucfirst($member->last_name) !!}</h3>
		</div>
	</div>
</div>


<!-- Modal -->
@include('member.partials.modal_photo_edit')

<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified" role="tablist">
	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
		<i class="fa fa-info-circle"></i> Información Personal/Medica</a>
	</li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Información Antropometrica</a>
	</li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pagos</a>
	</li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Creditos</a>
	</li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane fade in active" id="home">
		<p></p><br>
		<!-- contenido tab 1 -->

		@include('member.partials.tabpersonal')
		<!-- fin contenido tab 1 -->
	</div>
	<div role="tabpanel" class="tab-pane fade" id="profile">
		<p></p><br>
		<!-- contenido tab 2 -->
		@include('member.partials.tabantropometrica')
	</div>

</div>

</div>

@endsection