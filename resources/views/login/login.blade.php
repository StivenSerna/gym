@extends('admin.template.login')

@section('content')

<div class="site-wrapper">

	<div class="site-wrapper-inner">

		<div class="cover-container">

			<div class="inner cover">
				<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
						<form>
							<h2 class="form-signin-heading text-center">GYM Formas - fénix renace</h2><hr style="border-color:#222;">
							<div class="form-group">
								<label for="inputEmail">Email address</label>
								<input type="text" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
							</div>
							<div class="checkbox text-left">
								<label>
									<input type="checkbox" value="remember-me"> <span  style="color:#fff;" class="text-left">Recordarme</span>
								</label>
							</div>
							<div class="row">
								<div class="col-sm-4 col-sm-offset-4">
									<button class="btn btn-default btn-block" type="submit">Iniciar sesión</button>
								</div>
							</div>

						</form>
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