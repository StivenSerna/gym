<h2 class="page-header">Infomación personal</h2><br>

<div class="row">
	<div class="col-lg-7">
		<!-- Panel -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-user"></i> Información personal</h3>
			</div>
			<div class="panel-body">

				<div class="row" >

					<div class="col-lg-2">
						<div class="row">
							<div class="col-md-12">
								<!-- Nav tabs -->
								<ul class="nav nav-pills nav-stacked" role="tablist">
									<li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
									<li role="presentation"><a href="#contacto" aria-controls="contacto" role="tab" data-toggle="tab">Contacto</a></li>
									<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Otro</a></li>
									<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Opciones</a></li>
								</ul>
								<!-- Fin Nav tabs -->
							</div>
						</div>
					</div>

					<div class="col-lg-10">

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="general">
								<h5 class="text-primary"><b>Nombre completo</b></h5>
								<p class="text-capitalize">{!! $member->first_name ." ". $member->second_name ." ". $member->last_name !!}</p><hr>
								<h5 class="text-primary"><b>Documeo de Identidad</b></h5>
								<p>{!! $member->document !!}</p><hr>
								<h5 class="text-primary"><b>Fecha de Nacimiento</b></h5>
								<p><i class="fa fa-birthday-cake"></i> {!! $member->birthday!!}</p><hr>
								<h5 class="text-primary"><b>Fecha de Ingreso</b></h5>
								<p><i class="fa fa-calendar"></i> {!! $member->date_of_admission !!}</p><hr>
								<h5 class="text-primary"><b>Edad</b></h5>
								<p class="text-capitalize"><i class="fa fa-calendar"></i> {!! $member->age !!} años</p><hr>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="contacto">
								<h5 class="text-primary"><b>Dirección</b></h5>
								<p class="text-capitalize"><i class="fa fa-home"></i>  {!! $member->address !!}</p><hr>
								<h5 class="text-primary"><b>Numero de telefono</b></h5>
								<p><i class="fa fa-phone"></i>  {!! $member->phone !!}</p><hr>
								<h5 class="text-primary"><b> E-mail</b></h5>
								<p><i class="fa fa-envelope"></i>  {!! $member->email !!}</p><hr>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="messages">...</div>
							<div role="tabpanel" class="tab-pane fade" id="settings">...</div>
						</div>
						<!--FIn  Tab panes -->
						<!--
						<div class="form-group">
							<h4>Nombre Completo:</h4>
						</div>

						<div class="form-group">
							<h4>Documeo Identidad:</h4>
						</div>

						<div class="form-group">
							<h4>Fecha De Nacimiento:</h4>
						</div>

						<div class="form-group">
							<h4>Direccion:</h4>
						</div>

						<div class="form-group">
							<h4>E-mail:</h4>
						</div>-->
					</div>

				</div>

			</div>
			<a href="" data-toggle="modal" data-target="#memberedit">
				<div class="panel-footer">
				<span class="pull-left"><i class="fa fa-pencil-square-o"></i><b> Editar informacion personal</b></span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
			@include('member.partials.modal_member_edit')
		</div>
		<!-- Fin panel -->
	</div>

	<!--  Ficha medica    -->

	<div class="col-lg-5">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-medkit"></i> Informacion medica</h3>
			</div>
			<div class="panel-body">

				<div class="row">
					<div class="col-md-4">
						<dt>Enfermedades actuales</dt>
					</div>
					<div class="col-md-8">
						@if(isset($member->medicalrecord->current_diseases))
						<dd>{!! $member->medicalrecord->current_diseases !!}</dd>
						@endif
					</div>
				</div><hr>

				<div class="row">
					<div class="col-md-4">
						<dt>Enfermedades sufridas</dt>
					</div>
					<div class="col-md-8">
						@if(isset($member->medicalrecord->suffered_diseases))
						<dd>{!! $member->medicalrecord->suffered_diseases !!}</dd>
						@endif
					</div>
				</div><hr>

				<div class="row">
					<div class="col-md-4">
						<dt>Fracturas sufridas</dt>
					</div>
					<div class="col-md-8">
						@if(isset($member->medicalrecord->suffered_fractures))
						<dd>{!! $member->medicalrecord->suffered_fractures !!}</dd>
						@endif
					</div>
				</div><hr>

				<div class="row">
					<div class="col-md-4">
						<dt>Observaciones</dt>
					</div>
					<div class="col-md-8">
						@if(isset($member->medicalrecord->observation))
						<dd>{!! $member->medicalrecord->observation !!}</dd>
						@endif
					</div>
				</div><br>


			</div>

			<a href="" data-toggle="modal" data-target="#medicaledit">
				<div class="panel-footer">
				<span class="pull-left"><i class="fa fa-pencil-square-o"></i><b> Editar informacion medica</b></span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
			@include('member.partials.modal_medicalrecord_edit')

		</div>
	</div>
</div>

