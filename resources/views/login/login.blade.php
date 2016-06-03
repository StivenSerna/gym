@extends('admin.template.login')

@section('content')

<div class="site-wrapper">

	<div class="site-wrapper-inner">

		<div class="cover-container">

			<div class="inner cover">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
						{!! Form::open(['route'=>'authenticate', 'method'=>'POST']) !!}
						<h2 class="form-signin-heading text-center">GYM Formas - fénix renace</h2><hr style="border-color:#222;">
						<h5>{!! $user->email !!} - secret</h5>
						@if (count($errors) > 0)
						@foreach ($errors->all() as $err)
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>¡Error!</strong> {{ $err }}.
						</div>
						@endforeach
						@endif

						<div class="form-group">
							{!!Form::label('email', 'Correo electrónico')!!}
							{!!Form::text('email', null,['class'=>'form-control', 'placeholder'=>'Correo electrónico', 'required' => true, 'autofocus' => 'true'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('password', 'Contraseña')!!}
							{!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'required' => true])!!}
						</div>

						<div class="checkbox text-left">
							<label>
								{!! Form::checkbox('remember', true) !!} <span  style="color:#fff;" class="text-left">Recordarme</span>
							</label>
						</div>

						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<button class="btn btn-default btn-block" type="submit">Iniciar sesión</button>
							</div>
						</div>

						{!! Form::close() !!}
					</div>
				</div>

			</div>

			<div class="mastfoot">
				<div class="inner">
					<p>Software <a href="#">GYM</a>, por <a href="#">GYM Corporation</a>.</p>
				</div>
			</div>

		</div>

	</div>

</div>


@endsection