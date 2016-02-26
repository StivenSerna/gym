@extends('admin.template.main')

@section('tittle', 'Miembros')

@section('stylesheet')
<link href="{{ asset('plugins/bdt/dateTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/bdt/jquery.dateTables.js') }}"></script>


@endsection

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

	<div class="col-lg-3">

		<div class="thumbnail">
			<div class="caption">

				<a href="{{ route('admin.member.create') }}" class="btn btn-primary btn-lg btn-block" type="button">
					<i class="fa fa-user-plus">
					</i> Registrar nuevo
				</a>

				<a href="{{ route('admin.member.create') }}" class="btn btn-warning btn-lg btn-block" type="button">
					<i class="fa fa-trash ">
					</i> Borrar inactivos
				</a>

			</div>
		</div>

		@include('member.forms.search')
	</div><!-- /.col-lg-3 -->

	<div class="col-lg-9">

		<div class="thumbnail filterable">
			<div class="portlet">
				<div class="portlet-title">
					<div class="caption">
						<p class="text-primary"><i class="fa fa-users"></i> Miembros</p>
					</div>
					<div class="actions pull-right">

					</div>

				</div>

				<div class="portlet-body">
					<div class="table-responsive">
						<table class="table table-striped" id='filtrable'>
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Telefono</th>
									<th>Direccion</th>
									<th>Correo</th>
									<th>Fecha de ingreso</th>
									<th>Ver</th>
									<th>Borrar</th>
								</tr>
							</thead>
							<tbody>
								@foreach($members as $member)
								<tr class="filters">
									<td>{{ $member->first_name ." ". $member->second_name ." ".$member->last_name}}</td>
									<td>{{ $member->phone }}</td>
									<td>{{ $member->address }}</td>
									<td>{{ $member->email }}</td>
									<td>{{ $member->date_of_admission }}</td>
									<td><a href="{{ route('admin.member.show', $member->id) }}" class="btn btn-primary btn-xs">
										<i class="fa fa-eye fa-2x"></i></a>
									</td>
									<td><a href="{{ route('admin.member.destroy', $member->id) }}"
										onclick="return confirm('¿Esta seguro de querer eliminar el registro?')" class="btn btn-danger btn-xs">
										<i class="fa fa-trash fa-2x"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table><hr>
					</div>
				</div><!-- /.panel-body -->


			</div><!-- /.panel panel-primary -->

		</div><!-- /.col-lg-6 -->

	</div><!-- /.row -->
</div>

<script type="text/javascript">
	$('#input-daterange').datepicker({
		format: "yyyy-mm-dd",
		language: "es",
		autoclose: true,
		startView: 2,
		todayHighlight: true
	});
</script>

<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#filtrable').dataTable( {
			"language": {
				"url": "{{ asset('plugins/bdt/spanish.json') }}"
			},
			"aoColumnDefs": [
			{ "bSortable": false, "aTargets": [ 1, 2, 3, 5, 6 ] }
			]
		} );
	} );
</script>


@endsection