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
				{!! link_to_route('admin.member.create', $title = 'Registrar nuevo', $parameters = array(),
				$attributes = array('class' => 'btn btn-primary btn-lg', 'type' => 'button')) !!}
			</div>
		</div>
		<div class="row">

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
					</thead>
					<tbody>
						@foreach($mem as $member)
						<tr>
							<td>{{ $member->first_name }}</td>
							<td>{{ $member->phone }}</td>
							<td>{{ $member->address }}</td>
							<td>{{ $member->email }}</td>
							<td>{{ $member->date_of_admission }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div><!-- /.col-lg-6 -->

</div><!-- /.row -->

<script type="text/javascript">
	$('#datepicker').datepicker({
		format: "yyyy-mm-dd",
		startView: 2,
		language: "es",
		todayBtn: "linked",
		autoclose: true,
		orientation: "bottom left"
	});
</script>

@endsection