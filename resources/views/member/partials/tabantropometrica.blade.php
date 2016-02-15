<h2 class="page-header">Infomación antropometrica</h2><br>
<div class="row">
	<div class="col-lg-10"></div>
	<div class="col-lg-2">
		{!! link_to_route('anthropometricrecord.create', $title = 'Nueva Ficha', $parameters = array($member->id), $attributes = array('class' => "btn btn-primary btn-block pull-right")) !!}
	</div>
</div><hr>

<div class="row">

	<div class="col-lg-10">

		<div class="panel panel-default">
			<div class="panel-heading">
				Medidas antropometricas
			</div>

			<div class="panel-body">
				<!-- INICIO de las tabs de antropometricas -->
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

										{!!"<!--"!!}{{ $i = 0 }}{!!"-->"!!}
										@foreach ($member->anthropometricMeasurements as $anthrom)

										{!!"<!--"!!}{{$i++}}{!!"-->"!!}

										<!-- Inicio contenido tabla -->

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

					</div>

				</div>
				<!-- FIN de las tabs de antropometricas -->
			</div>

			<div class="panel-footer">

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
				<ul class="nav nav-pills nav-stacked" role="tablist">
					<li role="presentation" class="active"><a href="#all-fichas" aria-controls="all-fichas" role="tab" data-toggle="tab">
						<span class="badge pull-right">
							{{ isset($member->anthropometricMeasurements) ? count($member->anthropometricMeasurements) : ""}}
						</span>Todas</a>
					</li>
					<li role="presentation"><a href="#">Mas reciente</a></li>
					<li role="presentation"><a href="#estadisticas-fichas" aria-controls="estadisticas-fichas" role="tab" data-toggle="tab">Estadisticas</a></li>
				</ul>
				<!-- Fin Nav de fichas antropometricas -->
			</div>
		</div><br>


		<!--
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-comments fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge">26</div>
								<div>IMC actual</div>
							</div>
						</div>
					</div>
					<a href="#">
						<div class="panel-footer">
							<span class="pull-left">ver detalles</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
		</div>-->
	</div>



</div>

<!-- Inicio contenido de el modal de borrado de fichas antropometricas-->

<div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Borrar fichas antropometricas antiguas</h4>
			</div>
			<div class="modal-body">
				<h5>Opciones</h5>

				<input id="ex7-enabled" type="checkbox"/> Borrar por cantidad de registros<br>
				<input id="ex7" type="text" data-slider-min="0" data-slider-max="{{ isset($member->anthropometricMeasurements) ? count($member->anthropometricMeasurements) : 0 }}" data-slider-step="1" data-slider-value="0" data-slider-enabled="false"/><br>
				<span> Se conservarian <b><span id="ex7SliderVal">-</span></b>  fichas antropometricas</span><hr>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-danger">Eliminar</button>
			</div>
		</div>
	</div>
</div>

<!-- Fin contenido de el modal de borrado de las fichas antropometrcas -->


<script type="text/javascript">
	@-moz-document url-prefix() {
		fieldset { display: table-cell; }
	}
</script>

<script type="text/javascript">

	var slider = new Slider("#ex7", {
		tooltip: 'always'
	});

	$("#ex7-enabled").click(function() {
		if(this.checked) {
		// With JQuery
		$("#ex7").slider("enable");

		// Without JQuery
		slider.enable();
	}
	else {
		// With JQuery
		$("#ex7").slider("disable");

		// Without JQuery
		slider.disable();
	}
});

	//cambiar valores en el slider para el span

	$("#ex7").on("slide", function(slideEvt) {
		$("#ex7SliderVal").text({{ isset($member->anthropometricMeasurements) ? count($member->anthropometricMeasurements) : 0 }} - slideEvt.value);
	});

</script>