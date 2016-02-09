		<div class="row" >

			<div class="col-lg-6">

				<div class="form-group">
					{!!Form::label('Enfermedades Actuales:')!!}
					{!!Form::text('current_diseases', null,['class'=>'form-control','placeholder'=>'Enfermedades Actuales '])!!}
				</div>

				<div class='form-group {{ $errors->has('suffered_diseases') ? 'has-error' : '' }} has-feedback'>
					{!!Form::label('Enfermedades Sufridas:')!!}
					{!!Form::text('suffered_diseases', null,['class'=>'form-control','placeholder'=>'Enfermedades Sufridas ', 'aria-describedby'=> "inputError2Status"])!!}
					@if ($errors->has('suffered_diseases'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="help-block">
						{{ $errors->first('suffered_diseases') }}
					</span>
					@endif
				</div>

				<div class="form-group">
					{!!Form::label('Fracturas Sufridas:')!!}
					{!!Form::text('suffered_fractures', null,['class'=>'form-control','placeholder'=>'Fracturas Sufridas'])!!}
				</div>


			</div>


			<div class="col-lg-6">

				<div class='form-group {{ $errors->has('observation') ? 'has-error' : '' }} has-feedback'>
					{!!Form::label('Observaciones:')!!}
					{!!Form::textarea('observation', null,['class'=>'form-control','placeholder'=>'Observaciones ', 'aria-describedby'=> "inputError2Status"])!!}
					@if ($errors->has('observation'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="help-block">
						{{ $errors->first('observation') }}
					</span>
					@endif
				</div>

			</div>


		</div>