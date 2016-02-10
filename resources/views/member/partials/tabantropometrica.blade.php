<h2 class="page-header">Infomación antropometrica</h2><br>

<div class="row">

	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-heading">

				<ul class="nav nav-pills">
					<li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
					<li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
					<li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
							<li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
						</ul>
					</li>
				</ul>
			</div>

			<div class="panel-body">

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<!-- INICIO DEL PANEL -->

					{!!"<!--"!!}{{ $i = 0 }}{!!"-->"!!}
					@foreach ($member->anthropometricMeasurements as $anthrom)

					<div class="panel panel-default">

						<div class="panel-heading" role="tab" id="heading{{ $i }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $i }}" aria-expanded="{{ ($i == 0) ? "true" : "false"}}" aria-controls="collapse{{ $i }}">
									<i class="fa fa-arrow-circle-right"></i> Ficha antropometrica: {{$anthrom->created_at->format('d M Y - H:i')}}
								</a>
							</h4>
						</div>

						<div id="collapse{{ $i }}" class="panel-collapse collapse {{ ($i == 0) ? "in" : ""}}" aria-controls="collapse{{ $i }}" role="tabpanel" aria-labelledby="heading{{ $i }}">
							<div class="panel-body">
								<!-- Inicio contenido de la ficha -->
								{!!"<!--"!!}{{$i++}}{!!"-->"!!}
								{{ $anthrom->weight }}


								<!-- fin contenido de la ficha -->
							</div>
						</div>
					</div>

					@endforeach


					<!-- FIN DEL PANEL -->

				</div>

			</div>
		</div>
	</div>

	<div class="col-lg-2">

		<div class="row">
			<div class="col-lg-12 col-md-12">

				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active"><a href="#">Todas</a></li>
					<li role="presentation"><a href="#">Mas reciente</a></li>
					<li role="presentation"><a href="#">Estadisticas</a></li>
				</ul>
			</div>
		</div><br>

		<button type="button" class="btn btn-primary btn-block">Nueva ficha</button><br>
		<button type="button" class="btn btn-warning btn-block">Borrar antiguas</button><br>

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
		</div>

	</div>



</div>




<script type="text/javascript">
	@-moz-document url-prefix() {
		fieldset { display: table-cell; }
	}
</script>