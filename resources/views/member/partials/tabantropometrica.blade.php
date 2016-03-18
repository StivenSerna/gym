<h2 class="page-header">Infomación antropometrica</h2><br>
<div class="row">
	<div class="col-lg-10"></div>
	<div class="col-lg-2">
		{!! link_to_route('anthropometricrecord.create', $title = 'Nueva Ficha', $parameters = array($member->id), $attributes = array('class' => "btn btn-primary btn-block pull-right")) !!}
	</div>
</div><hr>

<div class="row">

	<div class="col-lg-10">

		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="actions pull-right">
						<a href="{{ route('anthropometricrecord.create', $member->id) }}" class="btn btn-blue">
							<i class="fa fa-file-text-o"></i>
							Nueva
						</a>
					</div>
					<div class="caption">
						<p class="text-primary"><i class="fa fa-list-ol"></i>  Medidas antropometricas</p>
					</div>
				</div>


				<!-- INICIO de las tabs de antropometricas -->
				<!-- Tab panes /tab-content-->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="all-fichas">
						<!-- INICIO DE la tabla -->
						<div class="agenda">
							<div class="table-responsive">
								<table class="table table-condensed table-bordered">
									<thead>
										<tr>
											<th>Fecha</th>
											<th></th>
											<th>Brazo</th>
											<th>Antebrazo</th>
											<th>Pierna alta</th>
											<th>Pierna baja</th>
											<th>Pantorrilla</th>

											<th>Peso</th>
											<th>Altura</th>
											<th>Espalda</th>
											<th>Pecho</th>
											<th>Abdomen</th>
											<th>Cintura</th>
											<th>Cadera</th>

										</tr>
									</thead>
									<tbody>
										<?php
										$fechas = array();
										$imc = array();
										?>

										{!!"<!--"!!}{{ $i = 0 }}{!!"-->"!!}
										@foreach ($member->anthropometricMeasurements as $anthrom)

										{!!"<!--"!!}{{$i++}}{!!"-->"!!}

										<!-- Inicio contenido tabla -->
										<?php

										array_unshift($fechas, "'".$anthrom->created_at->format('w') . "-" . $anthrom->created_at->format('n') . "-" .$anthrom->created_at->format('Y')."'");
										array_unshift($imc, $anthrom->imc)
										?>
										<tr>
											<td class="agenda-date" class="active" rowspan="2">
												<div class="dayofmonth">{{ $anthrom->created_at->format('d') }}</div>
												<div class="dayofweek">{{ $meses[$anthrom->created_at->format('n')-1] }}</div>
												<div class="shortdate text-muted">{{ $dias[$anthrom->created_at->format('w')] . $anthrom->created_at->format(', Y')  }}</div>
											</td>
											<td class="agenda-time">
												<b>Lado derecho</b>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->rightAnthropometric->right_arm }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->rightAnthropometric->right_forearm }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->rightAnthropometric->right_high_leg }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->rightAnthropometric->right_lower_leg }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->rightAnthropometric->right_calf }}
												</div>
											</td>

											<td class="agenda-events" rowspan="2">
												<div class="agenda-event">
													{{ $anthrom->weight }}
												</div>
											</td>
											<td class="agenda-events" rowspan="2">
												<div class="agenda-event">
													{{ $anthrom->height }}
												</div>
											</td>
											<td class="agenda-events" rowspan="2">
												<div class="agenda-event">
													{{ $anthrom->shoulders }}
												</div>
											</td>
											<td class="agenda-events" rowspan="2">
												<div class="agenda-event">
													{{ $anthrom->chest }}
												</div>
											</td>
											<td class="agenda-events" rowspan="2">
												<div class="agenda-event">
													{{ $anthrom->abdomen }}
												</div>
											</td>
											<td class="agenda-events" rowspan="2">
												<div class="agenda-event">
													{{ $anthrom->waist }}
												</div>
											</td>
											<td class="agenda-events" rowspan="2">
												<div class="agenda-event">
													{{ $anthrom->hip }}
												</div>
											</td>

										</tr>
										<tr>
											<td class="agenda-time">
												<b>Lado izquierdo</b>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->leftAnthropometric->left_arm }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->leftAnthropometric->left_forearm }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->leftAnthropometric->left_high_leg }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->leftAnthropometric->left_lower_leg }}
												</div>
											</td>
											<td class="agenda-events">
												<div class="agenda-event">
													{{ $anthrom->leftAnthropometric->left_calf }}
												</div>
											</td>
										</tr>
										<td class="info" colspan="14">
										</td>
										<tr>
										</tr>


										<!-- Fin contenido tabla -->

										@endforeach

									</tbody>
								</table>
							</div>
						</div>
						<!-- FIN DE La tabla -->
					</div>

					<div role="tabpanel" class="tab-pane fade" id="estadisticas-fichas">
						<div class="row">
							<div id="containerChart" style="min-width: 310px; height: 400px; margin: 0 auto" class="contains-chart"></div>
						</div>

					</div>

				</div>
				<!-- FIN de las tabs de antropometricas -->


			</div>
		</div>

	</div>

	<div class="col-lg-2">
		<a href="" type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modaldelete">
			Borrar antiguas
		</a><hr />
		<!-- {{ route('anthropometricrecord.destroy', $member->id) }} -->
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<!-- Nav de fichas antropometricas -->
				<ul class="nav nav-pills nav-stacked nav-pills-right" role="tablist">
					<li role="presentation" class="active">
						<a href="#all-fichas" aria-controls="all-fichas" role="tab" data-toggle="tab">
							<span class="badge pull-right">
								{{ isset($member->anthropometricMeasurements) ? count($member->anthropometricMeasurements) : "0"}}
							</span>
							Todas
						</a>
					</li>
					<li role="presentation">
						<a href="#estadisticas-fichas" aria-controls="estadisticas-fichas" role="tab" data-toggle="tab">
							<i class="fa fa-area-chart"></i>
							Estadisticas
						</a>
					</li>
				</ul>
				<!-- Fin Nav de fichas antropometricas -->
			</div>
		</div><br>
	</div>



</div>

<!-- Inicio contenido de el modal de borrado de fichas antropometricas-->

<div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		{!! Form::open(array('route' => array('anthropometricrecord.destroy', $member->id), 'method' => 'POST')) !!}
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Borrar fichas antropometricas antiguas</h4>
			</div>
			<div class="modal-body">
				<h4 class="text-primary">Opciones <small> solo puede seleccionar una</small></h4><hr>

				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<label>{{ Form::radio('optradio', 1, true, ['id' => 'ex8-enabled']) }}Dejar solo la ultima ficha</label>
						</div>
					</div>
					<div class="col-md-8">

					</div>
				</div><hr>

				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<label>{{ Form::radio('optradio', 2, false, ['id' => 'ex7-enabled']) }}Borrar antiguas</label>
						</div>
					</div>
					<div class="col-md-8">
						<input id="ex7" type="text" data-slider-min="0" name="borrar" data-slider-max="{{ isset($member->anthropometricMeasurements) ? count($member->anthropometricMeasurements) : 0 }}" data-slider-step="1" data-slider-value="0" data-slider-enabled="false"/><br><br>
						<span> Se conservarian <b><span id="ex7SliderVal">{!! count($member->anthropometricMeasurements) !!}</span></b>  ficha(s) antropometricas</span>
					</div>
				</div><hr>

				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div class="radio">
								<label>{{ Form::radio('optradio', 3, false, ['id' => 'ex9-enabled']) }}Dejar las ultimas</label>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<input id="ex9" type="text" data-slider-min="0" name="dejar" data-slider-max="{{ isset($member->anthropometricMeasurements) ? count($member->anthropometricMeasurements) : 0 }}" data-slider-step="1" data-slider-value="0" data-slider-enabled="false"/><br>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>


<!-- Fin contenido de el modal de borrado de las fichas antropometrcas -->

<script type="text/javascript">

	$(function () {
		$('#containerChart').highcharts({
			chart: {
				renderTo: 'containerChart',
				type: 'area'
			},
			title: {
				text: 'Historico del indice de masa corporal'
			},
			subtitle: {
				text: 'IMC por fechas, comenzando por la medicion mas antigua a la mas nueva'
			},
			xAxis: {
				categories: [<?php echo join($fechas, ',') ?>],
				tickmarkPlacement: 'on',
				title: {
					enabled: false
				}
			},
			yAxis: {
				title: {
					text: 'Valor'
				},
				labels: {
					formatter: function () {
						return this.value / 1;
					}
				}
			},
			tooltip: {
				shared: true,
				valueSuffix: ' '
			},
			plotOptions: {
				area: {
					stacking: 'normal',
					lineColor: '#666666',
					lineWidth: 1,
					marker: {
						lineWidth: 1,
						lineColor: '#666666'
					}
				}
			},
			lang: {
				downloadPDF: "Descargar en PDF",
				downloadJPEG: "Descargar como imagen JPEG",
				downloadPNG: "Descargar como imagen PNG",
				downloadSVG: "Descargar como SVG",
				printChart: "Imprimir grafica"
			},
			series: [{
				name: 'IMC',
				data: [<?php echo join($imc, ',') ?>]
			}]
		});
	});


jQuery(document).on( 'shown.bs.tab', 'a[data-toggle="tab"]', function (e) { // on tab selection event
    jQuery( ".contains-chart" ).each(function() { // target each element with the .contains-chart class
        var chart = jQuery(this).highcharts(); // target the chart itself
        chart.reflow() // reflow that chart
       });
   })

  </script>
  <!-- fin grafica -->


  <script type="text/javascript">
  	@-moz-document url-prefix() {
  		fieldset { display: table-cell; }
  	}
  </script>


  <!-- Para el slider -->
  <script type="text/javascript">

  	$("#ex7").slider({
  		id: "slider12a"
  	});

  	$("#ex9").slider({
  		id: "slider12b"
  	});

  	$("#ex7-enabled").click(function() {
  		if(this.checked) {

  			$("#ex7").slider("enable");
  			$("#ex9").slider("disable");

  		}
  		else {

  			$("#ex7").slider("disable");
  		}
  	});


  	$("#ex9-enabled").click(function() {
  		if(this.checked) {

  			$("#ex7").slider("disable");
  			$("#ex9").slider("enable");

  		}
  		else {

  			$("#ex9").slider("disable");
  		}
  	});



	//cambiar valores en el slider para el span

	$("#ex7").on("slide", function(slideEvt) {
		$("#ex7SliderVal").text({{ isset($member->anthropometricMeasurements) ? count($member->anthropometricMeasurements) : 0 }} - slideEvt.value);
	});

</script>