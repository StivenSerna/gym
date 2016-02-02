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

<div>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
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
		@include('member.partials.tabpersonal')

		</div>

	</div>

</div>

@endsection