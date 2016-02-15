		<div class="row" >

			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6">
						<div class='form-group {{ $errors->has('first_name') ? 'has-error' : '' }} has-feedback'>
							{!! Form::label('first_name', 'Primer Nombre:', array('class' => 'control-label')) !!}
							{!! Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Primer Nombre ', 'aria-describedby'=> "inputError2Status"]) !!}
							@if ($errors->has('first_name'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError2Status" class="help-block">
								{{ $errors->first('first_name') }}
							</span>
							@endif
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							{!!Form::label('second_name', 'Segundo Nombre:')!!}
							{!!Form::text('second_name', null,['class'=>'form-control','placeholder'=>'Segundo Nombre'])!!}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8">

						<div class='form-group {{ $errors->has('last_name') ? 'has-error' : '' }} has-feedback'>
							{!! Form::label('last_name' ,'Apellidos:') !!}
							{!! Form::text('last_name', null,['class'=>'form-control','placeholder'=>'Apellidos', 'aria-describedby'=> "inputError2Status"]) !!}
							@if ($errors->has('last_name'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError2Status" class="help-block">
								{{ $errors->first('last_name') }}
							</span>
							@endif
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							{!!Form::label('gender', 'Genero:')!!}
							{!! Form::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null,  ['class' => 'form-control']) !!}
						</div>
					</div>
				</div><hr style="border-color: #008cba;">

				<div class="row">
					<div class="col-lg-7">

						<div class='form-group {{ $errors->has('document') ? 'has-error' : '' }} has-feedback'>
							{!! Form::label('document', 'Nº identificación:')!!}
							{!! Form::text('document', null,['class'=>'form-control', 'placeholder'=>'Nº identificación', 'aria-describedby'=> "inputError2Status"]) !!}
							@if ($errors->has('document'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError2Status" class="help-block">
								{{ $errors->first('document') }}
							</span>
							@endif
						</div>
					</div>

					<div class="col-lg-5">

						<div class="form-group">
							{!!Form::label('birthday', 'Fecha de Nacimiento:')!!}
							<div class='input-group date'>
								{!! Form::text('birthday', null, array('class'=>'form-control birthdate')) !!}
								<div class="input-group-addon">
									<span class='glyphicon glyphicon-calendar'></span>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="form-group">
					{!!Form::label('email', 'Email:')!!}
					<div class="input-group">
						<div class="input-group-addon">
							<span class='glyphicon glyphicon-envelope'></span>
						</div>
						{!!Form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])!!}
					</div>
				</div>

				<div class="row">

					<div class="col-lg-7">

						<div class='form-group {{ $errors->has('address') ? 'has-error' : '' }} has-feedback'>

							{!!Form::label('address', 'Direccion:')!!}
							<div class="input-group">
								<div class="input-group-addon">
									<span class='glyphicon glyphicon-home'></span>
								</div>
								{!!Form::text('address', null,['class'=>'form-control','placeholder'=>'Direccion' , 'aria-describedby'=> "inputError2Status"])!!}
							</div>

							@if ($errors->has('address'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError2Status" class="help-block">
								{{ $errors->first('address') }}
							</span>
							@endif
						</div>

					</div>

					<div class="col-lg-5">
						<div class="form-group">
							{!!Form::label('phone', 'Telefono:')!!}
							<div class="input-group">
								<div class="input-group-addon">
									<span class='glyphicon glyphicon-phone'></span>
								</div>
								{!!Form::text('phone', null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
							</div>
						</div>
					</div>
				</div>

			</div>


			<div class="col-lg-6">

				<div class="row">
					<div class="col-xs-8 col-md-4 col-xs-offset-2 col-md-offset-4">
						@include('member.forms.photo_form')
					</div>
					<!--
					<div class="col-xs-8 col-md-4">
						<a class="thumbnail">
							<img id="img_destino" src="http://placehold.it/171x180" alt="Foto">
						</a>
					</div>

					<div class="form-group">
						{!!Form::label('photo', 'Foto:')!!}
						{!! Form::file('photo',  array('id' => 'photo')) !!}
						<p class="help-block">Escoger una foto desde el ordenador.</p>
					</div>-->
				</div><hr style="border-color: #008cba;">

				<div class="form-group">
					{!!Form::label('date_of_admission', 'Fecha de ingreso:')!!}
					<div class='input-group date'>
						{!! Form::text('date_of_admission', null, array('class'=>'form-control datepicker')) !!}
						<div class="input-group-addon">
							<span class='glyphicon glyphicon-calendar'></span>
						</div>
					</div>
				</div>

			</div>



		</div>