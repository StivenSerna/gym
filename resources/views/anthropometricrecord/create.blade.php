@extends('admin.template.main')

@section('tittle', 'Ficha antropometricca')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Ficha antropometrica
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
<!-- end Page titulo -->

@endsection

@section('content')

{!! Form::open() !!}

<div class="row">
	<div class="col-lg-3 col-md-9">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-info-circle"></i> Informacion general</h3>
	</div>
	<div class="panel-body">

		<div class="row" >

			<div class="col-lg-12">

				<div class="form-group">
					{!!Form::label('Peso:')!!}
					{!!Form::text('currentillness', null,['class'=>'form-control','placeholder'=>'Peso'])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Estatura:')!!}
					{!!Form::text('sustaineddiseases', null,['class'=>'form-control','placeholder'=>'Estatura'])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Comentario:')!!}
					{!!Form::textarea('observation', null,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Comentarios '])!!}
				</div>

			</div>
		</div>
	</div>
</div>
		
	</div>

	<div class="col-lg-6 col-md-6">
		
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-heartbeat"></i> Informacion antropometrica</h3>
	</div>
	<div class="panel-body">


		<div class="row" >

			<div class="col-lg-4">

				<div class="form-group">
					{!!Form::label('PERFIL IZQUIERDO')!!}
					
				</div>

				<div class="form-group">
					{!!Form::label('Brazo:')!!}
					{!!Form::text('left-arm', null,['class'=>'form-control','placeholder'=>' '])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Antebrazo:')!!}
					{!!Form::text('forearm', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Pierna Alta:')!!}
					{!!Form::text('high-leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Pierna Baja:')!!}
					{!!Form::text('lower-leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Pantorrilla:')!!}
					{!!Form::text('calf', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>


			</div>


			<div class="col-lg-4">

				<div class="form-group">
					{!!Form::label('PARTE CENTRAL')!!}
				</div>

				<div class="form-group">
					{!!Form::label('Hombros:')!!}
					{!!Form::text('shoulders', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Pecho:')!!}
					{!!Form::text('chest', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Cadera:')!!}
					{!!Form::text('hip', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Abdomen:')!!}
					{!!Form::text('abdomen', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>
				<div class="form-group">
					{!!Form::label('Cintura:')!!}
					{!!Form::text('waist', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

			</div>

			<div class="col-lg-4">

				<div class="form-group">
					{!!Form::label('PERFIL DERECHO')!!}
				</div>

				<div class="form-group">
					{!!Form::label('Brazo:')!!}
					{!!Form::text('right-arm', null,['class'=>'form-control','placeholder'=>' '])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Antebrazo:')!!}
					{!!Form::text('forearm', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Pierna Alta:')!!}
					{!!Form::text('high-leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Pierna Baja:')!!}
					{!!Form::text('lower-leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('Pantorrilla:')!!}
					{!!Form::text('calf', null,['class'=>'form-control','placeholder'=>''])!!}
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

		</div>

	</div>

</div>
{!! Form::close() !!}

@endsection