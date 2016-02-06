@extends('admin.template.main')

@section('tittle', 'Ficha antropometricca')

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
<!-- end Page titulo -->

@endsection

@section('content')

<img src="{{'../../images/members/'}}{{ $member->image->name }}" alt="..." class="img-circle">

<div>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs nav-justified" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i>
	Información Personal/Medica</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Información Antropometrica</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pagos</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Creditos</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="home">
		<p></p><br>
		<!-- contenido tab 1 -->
		@include('member.partials.tabpersonal')
		<!-- fin contenido tab 1 -->
		</div>
		<div role="tabpanel" class="tab-pane" id="profile">
		<p></p><br>
		@include('member.partials.tabantropometrica')

		</div>

	</div>

</div>

@endsection