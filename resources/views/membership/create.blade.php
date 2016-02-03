@extends('admin.template.main')

@section('tittle', 'Membresias')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Membresias
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
<!-- end Page titulo -->

@endsection

@section('content')


@include('membership.partials.table')


@endsection