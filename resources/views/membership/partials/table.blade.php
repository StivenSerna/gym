<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-info-circle"></i> </h3>
			</div>
			<div class="panel-body">

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Nueva Membresia</button>

		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
@include('membership.partials.formodal')
				</div>
			</div>
		</div>

				<table class="table table-bordered">
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
						<th><a href="{{ route('membership.edit', $membership->id) }}" class="btn btn-info"><i class="fa fa-info-circle "></i></a>
								<a href="{{ route('membership.index') }}"
								 class="btn btn-danger"><i class="fa fa-trash "></i></a>
								</th>
					</tbody>

					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>