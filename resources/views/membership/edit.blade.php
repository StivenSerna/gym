
@extends('admin.template.main')

@section('tittle', 'Membresias editar')

@section('header')


<h1 class="page-header">
	Editar Membresia
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>


@endsection

@section('content')


@include('membership.partials.editar')
@endsection
