
@extends('admin.template.main')

@section('tittle', 'Membresias')

@section('header')


<h1 class="page-header">
	Membresias
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>


@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-info-circle"></i> </h3>
			</div>
			<div class="panel-body">

				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newMembership">Nueva Membresia</button>

				<div class="modal fade" id="newMembership" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							{!! Form::open(['route' =>'membership.store', 'method'=>'POST'])!!}
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Nueva membresia</h4>
							</div>
							<div class="modal-body">
								@include('membership.partials.form_membership')
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
								{!! Form::submit('Siguiente', ['class' => 'btn btn-success']) !!}
							</div>
							{!! Form::close ()!!}
						</div>
					</div>
				</div>

				<table class="table table-default">
					<br>
					<br>
					<thead>
						<th>Descripción</th>
						<th>Precio</th>
						<th>Meses</th>
						<th>Dias</th>
						<th>Acciones</th>
					</thead>
					@foreach($memberships as $membership)

					<tbody>
						<th>{{$membership->description}}</th>
						<th>{{$membership->price}}</th>
						<th>{{$membership->month}}</th>
						<th>{{$membership->day}}</th>

						<th>
							<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editMembership{{$membership->id}}">
								<i class="fa fa-pencil fa-2x"></i>
							</button>

							@include('membership.partials.modal_editar')

							<a href="{{ route('membership.destroy', $membership->id) }}"
								onclick="return confirm('¿Esta seguro de querer eliminar el registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-2x"></i>
							</a>
						</th>
					</tbody>

					@endforeach
				</table>
			</div>
		</div>
	</div>
</div><br><br><br>


@endsection
