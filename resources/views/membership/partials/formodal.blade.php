<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-credit-card"></i> </h3>
			</div>
			<div class="panel-body">

				<div class="row" >

					<div class="col-lg-12">

						<div class="form-group">
							{!! Form::label('first_name', 'Descripcion:') !!}
							{!! Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Descripcion: ']) !!}
						</div>


					</div>

				</div>


				<div class="row" >

					<div class="col-lg-3">

						<div class="input-group">

							<div class="form-group">
								{!! Form::label('first_name', 'Precio:') !!}
								{!! Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Precio ']) !!}
							</div>
						</div>

					</div>

					<div class="col-lg-3">

						<div class="form-group">
							{!! Form::label('first_name', 'Meses:') !!}
							{!! Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Meses ']) !!}
						</div>

					</div>

					<div class="col-lg-3">

						<div class="form-group">
							{!! Form::label('first_name', 'Dias:') !!}
							{!! Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Dias ']) !!}

						</div>

					</div>

				</div>


				<div class="panel-footer">
					<div class="row">
						<div class="col-md-3">
							
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="button-group">
										<a class="btn btn-danger btn-block" href="#" role="button">Cancelar</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="button-group">
										{!! Form::submit('Siguiente', ['class' => 'btn btn-success btn-block']) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>

				</div>




			</div>

		</div>

	</div>

</div>
