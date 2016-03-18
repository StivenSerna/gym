@extends('admin.template.main')

@section('tittle', 'Afiliaciones')

@section('stylesheet')
<link href="{{ asset('plugins/bdt/dateTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/bdt/jquery.dateTables.js') }}"></script>


@endsection

@section('header')


<h1 class="page-header">
	Afiliaciones
</h1>
<ol class="breadcrumb">
	<li>
		<a href="{{ route("inicio") }}"><i class="fa fa-dashboard"></i> Inicio</a>
	</li>
	<li class="active">
		<i class="fa fa-credit-card"></i> Afiliaciones
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
					<div class="caption">
						<p class="text-primary"><i class="fa fa-credit-card"></i> Afiliaciones activas</p>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-lg-12">

							<div class="table-responsive">
								<table class="table table-striped table-bordered" id='allAffiliations'>
									<thead>
										<tr>
											<th>#</th>
											<th>Miembro</th>
											<th>Descripción</th>
											<th>Activa</th>
											<th>Inicio</th>
											<th>Finalización</th>
											<th>Transacción</th>
											<th>Precio</th>
										</tr>
									</thead>
									<tbody>
										@foreach($affiliationActives as $affiliation)

										<tr>
											<td>{!! "A-".($affiliation->id + 100000) !!}</td>
											<td class="text-left">
												<a href="{{ route('admin.member.show', $affiliation->member->id) }}">
													<span class="text-capitalize">{!! $affiliation->member->first_name ." ". $affiliation->member->last_name !!}</span> <i class="fa fa-share-square-o"></i>
												</a>
											</td>
											<td>{{$affiliation->membership->description}}</td>
											<td class="text-center">
												<span class="label label-success">Activa</span>
											</td>
											<td>{!! $affiliation->initiation!!}</td>
											<td>{!! $affiliation->finalization!!}</td>
											<td class="text-center">
												@if ($affiliation->type == 'payment')
												<span class="label label-primary">Contado</span>
												@else
												<span class="label label-warning">Credito</span>
												@endif
											</td>
											<td class="text-right">
												$ {!! $affiliation->price!!}
											</td>
										</tr>

										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fin panel -->
	</div>
</div>



<div class="row">
	<div class="col-lg-12">
		<!-- panel -->
		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="caption">
						<p class="text-danger"><i class="fa fa-credit-card"></i> Afiliaciones inactivas</p>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-lg-12">

							<div class="table-responsive">
								<table class="table table-striped table-bordered" id='allAffiliationsInactives'>
									<thead>
										<tr>
											<th>#</th>
											<th>Miembro</th>
											<th>Descripción</th>
											<th>Activa</th>
											<th>Inicio</th>
											<th>Finalización</th>
											<th>Transacción</th>
											<th>Precio</th>
										</tr>
									</thead>
									<tbody>
										@foreach($affiliationInactives as $affiliation)

										<tr>
											<td>{!! "A-".($affiliation->id + 100000) !!}</td>
											<td class="text-left">
												<a href="{{ route('admin.member.show', $affiliation->member->id) }}">
													<span class="text-capitalize">{!! $affiliation->member->first_name ." ". $affiliation->member->last_name !!}</span> <i class="fa fa-share-square-o"></i>
												</a>
											</td>
											<td>{{$affiliation->membership->description}}</td>
											<td class="text-center">
												<span class="label label-danger">Caducada</span>
											</td>
											<td>{!! $affiliation->initiation!!}</td>
											<td>{!! $affiliation->finalization!!}</td>
											<td class="text-center">
												@if ($affiliation->type == 'payment')
												<span class="label label-primary">Contado</span>
												@else
												<span class="label label-warning">Credito</span>
												@endif
											</td>
											<td class="text-right">
												$ {!! $affiliation->price!!}
											</td>
										</tr>

										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fin panel -->
	</div>
</div><br><br><br>

<script type="text/javascript">
	$(document).ready(function() {
		$('#allAffiliations').dataTable( {
			"language": {
				"url": "{{ asset('plugins/bdt/spanish.json') }}"
			},
			"aoColumnDefs": [
			{ "bSortable": false, "aTargets": [4, 5] }
			]
		} );
	} );
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#allAffiliationsInactives').dataTable( {
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