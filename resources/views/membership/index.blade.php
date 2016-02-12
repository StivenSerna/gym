
@extends('admin.template.main')

@section('tittle', 'Membresias')

@section('header')


<h1 class="page-header">
	Membresias
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>


@endsection

@section('content')

@include('membership.partials.table')

@endsection
