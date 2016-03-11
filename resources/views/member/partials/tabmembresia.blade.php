<h2 class="page-header">Membresias</h2><br>

<div class="row">
	<div class="col-lg-9">
		<!-- Panel -->
		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="actions pull-right">
						<a href="{{ route('affiliation.create', $member->id) }}" type="button" class="btn btn-xs btn-blue">
							<i class="fa fa-plus"></i>
							Nueva afiliación
						</a>
					</div>
					<div class="caption">
						<p class="text-primary"><i class="fa fa-list-alt"></i>  Membresias activas</p>
					</div>

				</div>

				<div class="row" >

					<div class="col-lg-10">

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="opcionUno">

								<div class="table-responsive">
									<table class="table table-striped table-bordered" data-order='[[ 4, "dec" ]]' id='ordenable' width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Activa</th>
												<th>Descripción</th>
												<th>Inicio</th>
												<th>Finalización</th>
												<th>Transacción</th>
												<th>Precio</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($member->affiliations as $affiliation)
											<tr>
												<td>{!! "A-".($affiliation->id + 100000) !!}</td>
												<td>
													@if ($affiliation->id == $activa->id)
													<span class="label label-success">Activa</span>
													@else
													<span class="label label-default">Espera</span>
													@endif
												</td>
												<td>{!! $affiliation->membership->description !!}</td>
												<td>{!! $affiliation->initiation !!}</td>
												<td>{!! $affiliation->finalization !!}</td>
												<td>
													@if ($affiliation->type == 'payment')
													<span class="label label-primary">Contado</span>
													@else
													<span class="label label-warning">Credito</span>
													@endif
												</td>
												<td>$ {!! $affiliation->price !!}</td>
											</tr>
											@endforeach
										</tbody>

									</table>
								</div><hr>

							</div>
							<div role="tabpanel" class="tab-pane fade" id="opcionDos">

							</div>

							<div role="tabpanel" class="tab-pane fade" id="opcionTres">

							</div>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="row">
							<div class="col-md-12">
								<!-- Nav tabs -->
								<ul class="nav nav-pills nav-stacked" role="tablist">
									<li role="presentation" class="active">
										<a href="#opcionUno" aria-controls="opcionUno" role="tab" data-toggle="tab">
											<span class="badge pull-right">
												{!! count($member->affiliations) !!}
											</span>
											Todas
										</a>
									</li>
									<li role="presentation">
										<a href="#opcionDos" aria-controls="opcionDos" role="tab" data-toggle="tab">
											<i class="fa fa-table"></i>
											Balance
										</a>
									</li>
									<li role="presentation">
										<a href="#opcionTres" aria-controls="opcionTres" role="tab" data-toggle="tab">
											<i class="fa fa-cog"></i>
											Opciones
										</a>
									</li>
								</ul>
								<!-- Fin Nav tabs -->
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- Fin panel -->

	</div>

	<!--  Ficha medica    -->

	<div class="col-lg-3">
		<!-- Informacion medica -->

		<div class="thumbnail">
			<div class="portlet">


				@if ($activa != null)

				<div class="portlet-title">
					<div class="caption">
						<p class="text-success"><i class="fa fa-check"></i> Membresia activa-actual</p>
					</div>
				</div>

				<dt><h4>{!! $activa->membership->description !!}</h4></dt>

				<dt>Duración </dt>
				<dd>{!! $activa->membership->month !!} meses y {!! $activa->membership->day !!} dias</dd><br>
				<dt>Inicia </dt>
				<dd>{!! $activa->initiation !!}</dd>
				<dt>Caduca </dt>
				<dd>{!! $activa->finalization !!}</dd><br>

				<div class="progress">
					<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{{$activa->porcentaje}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$activa->porcentaje}}%">
						<b>{{intval($activa->porcentaje)}}%</b>
					</div>
				</div>

				@else

				<div class="portlet-title">
					<div class="caption">
						<p class="text-danger"><i class="fa fa-times"></i> Ninguna membresia activa</p>
					</div>
				</div>

				@endif

				<hr>

			</div>
		</div>

		<!-- Fin informacion medica -->

	</div>
</div>

<div class="row">
	<div class="col-lg-9">
		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="caption">
					<p class="text-danger"><i class="fa fa-list-alt"></i>  Membresias caducadas</p>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table table-striped table-bordered" data-order='[[ 4, "dec" ]]' id='ordenableDos' width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Activa</th>
								<th>Descripción</th>
								<th>Inicio</th>
								<th>Finalización</th>
								<th>Transacción</th>
								<th>Precio</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($inactivas as $affiliation)
							<tr>
								<td>{!! "A-".($affiliation->id + 100000) !!}</td>
								<td>
									<span class="label label-danger">Caducada</span>
								</td>
								<td>{!! $affiliation->membership->description !!}</td>
								<td>{!! $affiliation->initiation !!}</td>
								<td>{!! $affiliation->finalization !!}</td>
								<td>
									@if ($affiliation->type == 'payment')
									<span class="label label-primary">Contado</span>
									@else
									<span class="label label-warning">Credito</span>
									@endif
								</td>
								<td>$ {!! $affiliation->price !!}</td>
							</tr>
							@endforeach
						</tbody>

					</table>
				</div><hr>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#ordenable').dataTable( {
			"language": {
				"url": "{{ asset('plugins/bdt/spanish.json') }}"
			},
			"aoColumnDefs": [
			{ "bSortable": false, "aTargets": [0] }
			]
		} );

		$('#ordenableDos').dataTable( {
			"language": {
				"url": "{{ asset('plugins/bdt/spanish.json') }}"
			},
			"aoColumnDefs": [
			{ "bSortable": false, "aTargets": [0] }
			]
		} );
	} );
</script>