		<div class="row" >

			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6">
						<div class='form-group {{ $errors->has('first_name') ? 'has-error' : '' }} has-feedback'>
							{!! Form::label('first_name', 'Primer Nombre', array('class' => 'control-label')) !!}
							{!! Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Primer Nombre ', 'aria-describedby'=> "inputError1Status"]) !!}
							@if ($errors->has('first_name'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError1Status" class="help-block">
								{{ $errors->first('first_name') }}
							</span>
							@endif
						</div>
					</div>

					<div class="col-lg-6">
						<div class='form-group {{ $errors->has('second_name') ? 'has-error' : '' }} has-feedback'>
							{!!Form::label('second_name', 'Segundo Nombre', array('class' => 'control-label'))!!}
							{!!Form::text('second_name', null,['class'=>'form-control','placeholder'=>'Segundo Nombre', 'aria-describedby'=> "inputError2Status"])!!}
							@if ($errors->has('second_name'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError2Status" class="help-block">
								{{ $errors->first('second_name') }}
							</span>
							@endif
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8">

						<div class='form-group {{ $errors->has('last_name') ? 'has-error' : '' }} has-feedback'>
							{!! Form::label('last_name' ,'Apellidos', array('class' => 'control-label')) !!}
							{!! Form::text('last_name', null,['class'=>'form-control','placeholder'=>'Apellidos', 'aria-describedby'=> "inputError3Status"]) !!}
							@if ($errors->has('last_name'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError3Status" class="help-block">
								{{ $errors->first('last_name') }}
							</span>
							@endif
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							{!!Form::label('gender', 'Genero')!!}
							{!! Form::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null,  ['class' => 'form-control']) !!}
						</div>
					</div>
				</div><hr style="border-color: #008cba;">

				<div class="row">
					<div class="col-lg-7">

						<div class='form-group {{ $errors->has('document') ? 'has-error' : '' }} has-feedback'>
							{!! Form::label('document', 'Nº identificación', array('class' => 'control-label'))!!}
							{!! Form::text('document', null,['class'=>'form-control', 'placeholder'=>'Nº identificación', 'aria-describedby'=> "inputError4Status"]) !!}
							@if ($errors->has('document'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError4Status" class="help-block">
								{{ $errors->first('document') }}
							</span>
							@endif
						</div>
					</div>

					<div class="col-lg-5">

						<div class="form-group {{ $errors->has('birthday') ? ' has-error' : '' }} has-feedback">
							{!! Form::label('birthday', 'Fecha de Nacimiento', array('class' => 'control-label')) !!}
							<div class='input-group date'>
								{!! Form::text('birthday', null, array('class'=>'form-control birthdate', 'aria-describedby'=> "inputError5Status")) !!}
								<div class="input-group-addon">
									<span class='glyphicon glyphicon-calendar'></span>
								</div>
							</div>
							@if ($errors->has('birthday'))
							<span id="inputError5Status" class="help-block">
								{{ $errors->first('birthday') }}
							</span>
							@endif
						</div>

					</div>
				</div>

				<div class='form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback'>
					{!! Form::label('email', 'Email', array('class' => 'control-label')) !!}
					<div class="input-group">
						<div class="input-group-addon">
							<span class='glyphicon glyphicon-envelope'></span>
						</div>
						{!!Form::text('email', null,['class'=>'form-control','placeholder'=>'Email', 'aria-describedby'=> "inputError6Status"])!!}
					</div>
					@if ($errors->has('email'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					<span id="inputError6Status" class="help-block">
						{{ $errors->first('email') }}
					</span>
					@endif

				</div>

				<div class="row">

					<div class="col-lg-7">

						<div class='form-group {{ $errors->has('address') ? 'has-error' : '' }} has-feedback'>

							{!!Form::label('address', 'Direccion', array('class' => 'control-label'))!!}
							<div class="input-group">
								<div class="input-group-addon">
									<span class='glyphicon glyphicon-home'></span>
								</div>
								{!!Form::text('address', null,['class'=>'form-control','placeholder'=>'Direccion' , 'aria-describedby'=> "inputError7Status"])!!}
							</div>
							@if ($errors->has('address'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError7Status" class="help-block">
								{{ $errors->first('address') }}
							</span>
							@endif
						</div>

					</div>

					<div class="col-lg-5">
						<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }} has-feedback">
							{!!Form::label('phone', 'Telefono', array('class' => 'control-label'))!!}
							<div class="input-group">
								<div class="input-group-addon">
									<span class='glyphicon glyphicon-phone'></span>
								</div>
								{!!Form::text('phone', null,['class'=>'form-control','placeholder'=>'Telefono', 'aria-describedby'=> "inputError8Status"])!!}
							</div>
							@if ($errors->has('phone'))
							<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
							<span id="inputError8Status" class="help-block">
								{{ $errors->first('phone') }}
							</span>
							@endif
						</div>
					</div>
				</div>

			</div>


			<div class="col-lg-6">

				<div class="row">
					<div class="col-xs-8 col-md-4 col-xs-offset-2 col-md-offset-4">
						@include('member.forms.photo_form')
					</div>
				</div><hr style="border-color: #008cba;">

				<div class="form-group {{ $errors->has('date_of_admission') ? 'has-error' : '' }} has-feedback">
					{!!Form::label('date_of_admission', 'Fecha de ingreso', array('class' => 'control-label'))!!}
					<div class='input-group date'>
						{!! Form::text('date_of_admission', null, array('class'=>'form-control datepicker', 'aria-describedby'=> "inputError9Status")) !!}
						<div class="input-group-addon">
							<span class='glyphicon glyphicon-calendar'></span>
						</div>
					</div>
					@if ($errors->has('date_of_admission'))
					<span id="inputError9Status" class="help-block">
						{{ $errors->first('date_of_admission') }}
					</span>
					@endif
				</div>

			</div>



		</div>