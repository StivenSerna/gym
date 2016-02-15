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

		<div class="panel panel-primary filterable">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-users"></i> Miembros</h3>
				<div class="pull-right">
					<span class="clickable filter btn-filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
						<i class="fa fa-filter"></i>
					</span>
				</div>
			</div>
			<div class="panel-body">

				<table class="table">
					<thead>
						<tr class="filters">
							<th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
							<th><input type="text" class="form-control" placeholder="Telefono" disabled></th>
							<th><input type="text" class="form-control" placeholder="Direccion" disabled></th>
							<th><input type="text" class="form-control" placeholder="Correo" disabled></th>
							<th><input type="text" class="form-control" placeholder="Fecha de ingreso" disabled></th>
							<th><input type="text" class="form-control" placeholder="Opciones" disabled></th>
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

	<script type="text/javascript">
		$(document).ready(function(){
			$('.filterable .btn-filter').click(function(){
				var $panel = $(this).parents('.filterable'),
				$filters = $panel.find('.filters input'),
				$tbody = $panel.find('.table tbody');
				if ($filters.prop('disabled') == true) {
					$filters.prop('disabled', false);
					$filters.first().focus();
				} else {
					$filters.val('').prop('disabled', true);
					$tbody.find('.no-result').remove();
					$tbody.find('tr').show();
				}
			});

			$('.filterable .filters input').keyup(function(e){
				/* Ignore tab key */
				var code = e.keyCode || e.which;
				if (code == '9') return;
				/* Useful DOM data and selectors */
				var $input = $(this),
				inputContent = $input.val().toLowerCase(),
				$panel = $input.parents('.filterable'),
				column = $panel.find('.filters th').index($input.parents('th')),
				$table = $panel.find('.table'),
				$rows = $table.find('tbody tr');
				/* Dirtiest filter function ever ;) */
				var $filteredRows = $rows.filter(function(){
					var value = $(this).find('td').eq(column).text().toLowerCase();
					return value.indexOf(inputContent) === -1;
				});
				/* Clean previous no-result if exist */
				$table.find('tbody .no-result').remove();
				/* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
				$rows.show();
				$filteredRows.hide();
				/* Prepend no-result row if all rows are filtered */
				if ($filteredRows.length === $rows.length) {
					$table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
				}
			});
		});

	</script>


	@endsection