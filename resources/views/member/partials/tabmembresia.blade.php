<h2 class="page-header">Membresias</h2><br>

<div class="row">
	<div class="col-lg-8">
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
						<p class="text-primary"><i class="fa fa-list-alt"></i>  Afiliaciones a membresias</p>
					</div>

				</div>

				<div class="row" >

					<div class="col-lg-10">

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="opcionUno">

								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Activa</th>
												<th>Descripción</th>
												<th>Inicio</th>
												<th>Finalización</th>
												<th>Tipo de transacción</th>
												<th>Precio</th>
												<th>Pago / abono</th>
												<th>Saldo - Debe</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($member->affiliations as $affiliation)
											<tr>
												<td>{!! "A-".($affiliation->id + 1000) !!}</td>
												<td>
													@if ($affiliation->active)
													<span class="label label-success">Activa</span>
													@else
													<span class="label label-danger">Inactiva</span>
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
												<td>$ {!! $affiliation->payout !!}</td>
												<td>$ {!! $affiliation->payout -  $affiliation->payout !!}</td>
											</tr>
											@endforeach
										</tbody>

									</table>
								</div>


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

	<div class="col-lg-4">
		<!-- Informacion medica -->

		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="actions pull-right">
						<!--Boton -->
					</div>
					<div class="caption">
						<p class="text-success"><i class="fa fa-check"></i> Membresia activa</p>
					</div>

				</div>

				<div class="row">
					<div class="col-md-4">
						<dt>Enfermedades actuales</dt>
					</div>
					<div class="col-md-8">
						@if(isset($member->medicalrecord->current_diseases))
						<dd>{!! $member->medicalrecord->current_diseases !!}</dd>
						@endif
					</div>
				</div><hr><br>

			</div>
		</div>

		<!-- Fin informacion medica -->

	</div>
</div>
@include('member.partials.modal_medicalrecord_edit')