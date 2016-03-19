
@extends('admin.template.main')

@section('tittle', 'Membresias')

@section('stylesheet')
<link href="{{ asset('plugins/bdt/dateTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/bdt/jquery.dateTables.js') }}"></script>


@endsection

@section('header')


<h1 class="page-header">
	Membresias
</h1>
<ol class="breadcrumb">
	<li>
		<a href="{{ route("inicio") }}"><i class="fa fa-dashboard"></i> Inicio</a>
	</li>
	<li class="active">
		<i class="fa fa-credit-card"></i> Membresias
	</li>
</ol>


@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
		<!-- panel -->
		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="actions pull-right">
						<a class="btn btn-blue" data-toggle="modal" data-target="#newMembership">
							<i class="fa fa-file-text-o"></i>
							Nueva
						</a>
						<a class="btn btn-blue buttonclickable">
							<span class="clickable"><i class="fa fa-chevron-up"></i></span>
						</a>
					</div>
					<div class="caption">
						<p class="text-primary"><i class="fa fa-credit-card"></i> Membresias</p>
					</div>
				</div>
				<div class="thumbnail-collapse collapse in">
					<div class="portlet-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="modal fade" id="newMembership" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											{!! Form::open(['route' =>'membership.store', 'method'=>'POST'])!!}
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Nueva membresia</h4>
											</div>
											<div class="modal-body">
												@include('membership.partials.form_membership')
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
												{!! Form::submit('Siguiente', ['class' => 'btn btn-success']) !!}
											</div>
											{!! Form::close ()!!}
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped table-bordered" id='allMemberships'>
										<thead>
											<tr>
												<th>Descripción</th>
												<th class="text-right">Precio</th>
												<th class="text-center">Meses</th>
												<th class="text-center">Dias</th>
												<th class="text-center">Editar</th>
												<th class="text-center">Borrar</th>
											</tr>
										</thead>
										<tbody>
											@foreach($memberships as $membership)

											<tr>
												<td>{{$membership->description}}</td>
												<td class="text-right">$ {{$membership->price}}</td>
												<td class="text-center">{{$membership->month}}</td>
												<td class="text-center">{{$membership->day}}</td>

												<td class="text-center">
													<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editMembership{{$membership->id}}">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
												<td class="text-center">
													<a href="{{ route('membership.destroy', $membership->id) }}"
														onclick="return confirm('¿Esta seguro de querer eliminar el registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>
													</a>
												</td>
											</tr>

											@include('membership.partials.modal_editar')
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fin panel -->
	</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Pruebas-->

<!--Fin   Pruebas-->

<script type="text/javascript">
	$(document).ready(function() {
		$('#allMemberships').dataTable( {
			"language": {
				"url": "{{ asset('plugins/bdt/spanish.json') }}"
			},
			"aoColumnDefs": [
			{ "bSortable": false, "aTargets": [4, 5] }
			]
		} );
	} );
</script>




@endsection
