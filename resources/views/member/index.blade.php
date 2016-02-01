@extends('admin.template.main')

@section('tittle', 'Miembros')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Administracion de miembros
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
<!-- Page fin titulo -->

@endsection

@section('content')

<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="thumbnail">
			<div class="caption">
				<h3>Buscar</h3>
				<p>Buscar por : </p>

			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button"><i class="fa fa-search"></i>
</button>
			</span>
			<input type="text" class="form-control" placeholder="Search for...">
		</div><!-- /input-group -->
	</div><!-- /.col-lg-6 -->
	<div class="col-lg-6">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">Go!</button>
			</span>
		</div><!-- /input-group -->
	</div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="row">

	<div class="col-lg-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-users"></i> Miembros</h3>
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>

	<div class="col-lg-6">

	</div>
</div>



@endsection