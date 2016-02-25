<div class="modal fade" id="editMembership{{$membership->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		{!! Form::model($membership, array('route' => array('admin.member.update', $membership->id), 'method'=>'PUT')) !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Editar membresia</h4>
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



