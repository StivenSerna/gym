@extends('admin.template.main')

@section('tittle', 'Ficha antropometricca')

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Ficha antropometrica
</h1>
<ol class="breadcrumb">
	<li>
		<a href="{{ route("inicio") }}"><i class="fa fa-dashboard"></i> Inicio</a>
	</li>
	<li>
		<a href="{{ route("admin.member.index") }}"><i class="fa fa-users"></i> Miembros</a>
	</li>
	<li>
		<a href="{{ route("admin.member.show", $member->id) }}"><i class="fa fa-user"></i> Perfil <span class="text-capitalize">{!! $member->first_name!!}</span></a>
	</li>
	<li class="active">
		<i class="fa fa-list-ol"></i> Registrar ficha antropometrica
	</li>
</ol>
<!-- end Page titulo -->

@endsection

@section('content')

<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Información: </strong> Puede ingresar fichas antropometricas desde el
  <a href="{!! route("admin.member.show", $member->id) !!}" class="alert-link"> perfil</a> en cualquier momento.
</div>

{!! Form::open(['route'=>'anthropometricrecord.store', 'method'=>'POST']) !!}

{!! Form::hidden('member_id', $member->id) !!}

<div class="row">
	<div class="col-lg-3 col-md-9">
		<!--Panel-->
		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">
					<div class="actions pull-right">
						<span class="clickable"><i class="fa fa-chevron-up"></i></span>
					</div>
					<div class="caption">
						<p><i class="fa fa-credit-card"></i> Información general</p>
					</div>
				</div>
				<div class="thumbnail-collapse collapse in">
					<div class="portlet-body">
						<!--Contenido del panel -->
						<div class="row" >

							<div class="col-lg-12">

								<div class="form-group">
									{!! Form::label('weight', 'Peso') !!}
									<div class="input-group">
										{!! Form::text('weight', null,['class'=>'form-control','placeholder'=>'Peso']) !!}
										<div class="input-group-addon">kg</div>
									</div>

								</div>

								<div class="form-group">
									{!!Form::label('height', 'Estatura')!!}
									<div class="input-group">
										{!!Form::text('height', null,['class'=>'form-control', 'placeholder'=>'Estatura'])!!}
										<div class="input-group-addon">cm</div>
									</div>
								</div>

								<div class="form-group">
									{!!Form::label('comment', 'Comentario')!!}
									{!!Form::textarea('comment', null,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Comentarios '])!!}
								</div>

							</div>
						</div>
						<!-- Fin contenido del panel -->
					</div>
				</div>
			</div>
		</div>
		<!--Fin Panel-->

	</div>

	<div class="col-lg-6 col-md-6">

	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-list-ol"></i> Informacion antropometrica</h3>
	</div>
	<div class="panel-body">


		<div class="row" >

			<div class="col-lg-4">



				<div class="form-group">
					{!!Form::label('PERFIL IZQUIERDO')!!}

				</div>

				<div class="form-group">
					{!!Form::label('left_arm', 'Brazo:')!!}
					{!!Form::text('left_arm', null,['class'=>'form-control','placeholder'=>' '])!!}
				</div>

				<div class="form-group">
					{!!Form::label('left_forearm', 'Antebrazo:')!!}
					{!!Form::text('left_forearm', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('left_high_leg', 'Pierna Alta:')!!}
					{!!Form::text('left_high_leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('left_lower_leg', 'Pierna Baja:')!!}
					{!!Form::text('left_lower_leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('left_calf', 'Pantorrilla:')!!}
					{!!Form::text('left_calf', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>


			</div>


			<div class="col-lg-4">

				<div class="form-group">
					{!!Form::label('PARTE CENTRAL')!!}
				</div>

				<div class="form-group">
					{!!Form::label('shoulders', 'Hombros:')!!}
					{!!Form::text('shoulders', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('chest', 'Pecho:')!!}
					{!!Form::text('chest', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('hip', 'Cadera:')!!}
					{!!Form::text('hip', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('abdomen', 'Abdomen:')!!}
					{!!Form::text('abdomen', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>
				<div class="form-group">
					{!!Form::label('waist', 'Cintura:')!!}
					{!!Form::text('waist', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

			</div>

			<div class="col-lg-4">

				<div class="form-group">
					{!!Form::label('PERFIL DERECHO')!!}
				</div>

				<div class="form-group">
					{!!Form::label('right_arm', 'Brazo:')!!}
					{!!Form::text('right_arm', null,['class'=>'form-control','placeholder'=>' '])!!}
				</div>

				<div class="form-group">
					{!!Form::label('right_forearm', 'Antebrazo:')!!}
					{!!Form::text('right_forearm', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('right_high_leg', 'Pierna Alta:')!!}
					{!!Form::text('right_high_leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('right_lower_leg', 'Pierna Baja:')!!}
					{!!Form::text('right_lower_leg', null,['class'=>'form-control','placeholder'=>''])!!}
				</div>

				<div class="form-group">
					{!!Form::label('right_calf', 'Pantorrilla:')!!}
					{!!Form::text('right_calf', null,['class'=>'form-control','placeholder'=>''])!!}
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
							<a class="btn btn-danger btn-block" href="{!! route("admin.member.show", $member->id) !!}" role="button">Cancelar</a>
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

<!--
<div class="thumbnail">
	<div class="portlet">
		<div class="portlet-title">
			<div class="actions pull-right">
				<span class="clickable"><i class="fa fa-chevron-up"></i></span>
				<a class="btn btn-blue" data-toggle="modal" data-target="#newMembership">
					<i class="fa fa-plus"></i>
					Nueva
				</a>
			</div>
			<div class="caption">
				<p class="text-primary"><i class="fa fa-credit-card"></i> Membresias</p>
			</div>
		</div>
		<div class="thumbnail-collapse collapse in">
			<div class="portlet-body">

			</div>
		</div>
	</div>
</div>-->

@endsection