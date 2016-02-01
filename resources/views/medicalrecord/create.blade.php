@extends('admin.template.main')

@section('tittle', 'Ficha medica')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Información medica
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
<!-- end Page titulo -->

@endsection

@section('content')

<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Información:</strong> Puede modificar la ficha medica desde el modulo de miembros en cualquier momento.
</div>

{!! Form::open() !!}

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-medkit"></i> Informacion medica</h3>
	</div>
	<div class="panel-body">


		<div class="row" >

			<div class="col-lg-6">

				<div class="form-group">
					{!!Form::label('Enfermedades Actuales:')!!}
					{!!Form::text('currentillness', null,['class'=>'form-control','placeholder'=>'Enfermedades Actuales '])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Enfermedades Sufridas:')!!}
					{!!Form::text('sustaineddiseases', null,['class'=>'form-control','placeholder'=>'Enfermedades Sufridas '])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Fracturas Sufridas:')!!}
					{!!Form::text('sufferedfractures', null,['class'=>'form-control','placeholder'=>'Fracturas Sufridas'])!!}
				</div>


			</div>


			<div class="col-lg-6">

				<div class="form-group">
					{!!Form::label('Observaciones:')!!}
					{!!Form::textarea('observation', null,['class'=>'form-control','placeholder'=>'Observaciones '])!!}
				</div>

			</div>


		</div>

	</div>

	<div class="panel-footer">
		<div class="row">
			<div class="col-md-3"></div>
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


{!! Form::close() !!}
<br>



@endsection