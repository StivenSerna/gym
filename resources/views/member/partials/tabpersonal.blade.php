<h2 class="page-header">Infomación personal y medica</h2><br>

<div class="row">
	<div class="col-lg-7">
		<!-- Panel -->
		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="actions pull-right">
						<a class="btn btn-blue" data-toggle="modal" data-target="#memberedit">
							<i class="fa fa-pencil"></i>
							Editar
						</a>
					</div>
					<div class="caption">
						<p class="text-primary"><i class="fa fa-user"></i>  Información personal</p>
					</div>

				</div>

				<div class="row" >

					<div class="col-lg-2">
						<div class="row">
							<div class="col-md-12">
								<!-- Nav tabs -->
								<ul class="nav nav-pills nav-stacked" role="tablist">
									<li role="presentation" class="active">
										<a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a>
									</li>
									<li role="presentation">
										<a href="#contacto" aria-controls="contacto" role="tab" data-toggle="tab">Contacto</a>
									</li>
									<li role="presentation">
										<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Opciones</a>
									</li>
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

							<div role="tabpanel" class="tab-pane fade" id="settings">
								<h3 class="page-header">Opciones de perfil</h3>
								<a href="" class="btn btn-default" data-toggle="modal" data-target="#memberedit">
									Editar informacion personal
								</a>
								<a href="" class="btn btn-default" data-toggle="modal" data-target="#medicaledit">
									Editar informacion medica
								</a>
								{!! link_to_route('anthropometricrecord.create', $title = 'Nueva Ficha antropometrica', $parameters = array($member->id), $attributes = array('class' => "btn btn-default")) !!}
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- Fin panel -->

	</div>

	<!--  Ficha medica    -->

	<div class="col-lg-5">
		<!-- Informacion medica -->

		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="actions pull-right">
						<a class="btn btn-blue" data-toggle="modal" data-target="#medicaledit">
							<i class="fa fa-pencil"></i>
							Editar
						</a>
					</div>
					<div class="caption">
						<p class="text-warning"><i class="fa fa-medkit"></i> Informacion medica</p>
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
		</div>

		<!-- Fin informacion medica -->

	</div>
</div>
@include('member.partials.modal_medicalrecord_edit')