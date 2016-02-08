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

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-users"></i> Miembros</h3>
			</div>
			<div class="panel-body">

				<table class="table">
					<thead>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Direccion</th>
						<th>Correo</th>
						<th>Fecha de ingreso</th>
						<th>Opciones</th>
					</thead>
					<tbody>
						@foreach($members as $member)
						<tr>
							<td>{{ $member->first_name ." ". $member->second_name ." ".$member->last_name}}</td>
							<td>{{ $member->phone }}</td>
							<td>{{ $member->address }}</td>
							<td>{{ $member->email }}</td>
							<td>{{ $member->date_of_admission }}</td>
							<td><a href="{{ route('admin.member.show', $member->id) }}" class="btn btn-info"><i class="fa fa-info-circle "></i></a>
								<a href="{{ route('admin.member.destroy', $member->id) }}"
								onclick="return confirm('¿Esta seguro de querer eliminar el registro?')" class="btn btn-danger"><i class="fa fa-trash "></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div><!-- /.panel-body -->
			<div class="panel-footer">
				{!! $members->render() !!}
			</div>
		</div><!-- /.panel panel-primary -->
	</div><!-- /.col-lg-6 -->

</div><!-- /.row -->


<script type="text/javascript">
	$('#input-daterange').datepicker({
		format: "yyyy-mm-dd",
		language: "es",
		autoclose: true,
		startView: 2,
		todayHighlight: true
	});
</script>

@endsection