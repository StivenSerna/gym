<div class="row">
	<div class="col-lg-7">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-info-circle"></i> </h3>
			</div>
			<div class="panel-body">

				<div class="row" >

					<div class="col-lg-2">
						<div>

							<!-- Nav tabs -->
							<ul class="nav nav-pills nav-stacked" role="tablist">
								<li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
								<li role="presentation"><a href="#contacto" aria-controls="contacto" role="tab" data-toggle="tab">Contacto</a></li>
								<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
								<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							</ul>
							<!-- Fin Nav tabs -->

						</div>
					</div>

					<div class="col-lg-10">

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="general">
								<h5 class="text-primary"><b>Nombre completo</b></h5><hr>
								<p class="text-capitalize">{!! $member->first_name ." ". $member->first_name ." ". $member->last_name !!}</p><br>
								<h5 class="text-primary"><b>Documeo de Identidad</b></h5><hr>
								<p class="text-capitalize">{!! $member->document !!}</p><br>
								<h5 class="text-primary"><b>Fecha de Nacimiento</b></h5><hr>
								<p class="text-capitalize">{!! $member->birthday!!}</p><br>
								<h5 class="text-primary"><b>Fecha de Ingreso</b></h5><hr>
								<p class="text-capitalize">{!! $member->date_of_admission !!}</p><br>
							</div>
							<div role="tabpanel" class="tab-pane" id="contacto">
								<h5 class="text-primary"><b>Direccion</b></h5><hr>
								<p class="text-capitalize">{!! $member->address !!}</p><br>
								<h5 class="text-primary"><b>Numero de telefono</b></h5><hr>
								<p class="text-capitalize">{!! $member->phone !!}</p><br>
								<h5 class="text-primary"><b>E-mail</b></h5><hr>
								<p class="text-capitalize">{!! $member->email !!}</p><br>
							</div>
							<div role="tabpanel" class="tab-pane" id="messages">...</div>
							<div role="tabpanel" class="tab-pane" id="settings">...</div>
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
						</div>
						-->
					</div>

				</div>

			</div>
		</div>
	</div>
	<!--  Ficha medica    -->
	<div class="col-lg-5">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-info-circle"></i> </h3>
			</div>
			<div class="panel-body">


				<div class="row" >

					<div class="col-lg-6">

						<div class="form-group">
							<h4>Enfermedades Actuales:</h4>
						</div>


						<div class="form-group">
							<h4>Enfermdades Sufridas:</h4>
						</div>


						<div class="form-group">
							<h4>Fractura Sufridas:</h4>

						</div>


					</div>

					<div class="col-lg-6">

						<div class="form-group">
							<h4>Observaciones:</h4>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

