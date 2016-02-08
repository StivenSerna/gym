<div class="modal fade" id="fotoedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		{!! Form::model($member, array('route' => array('admin.member.update', $member->id), 'method'=>'PUT', 'files' => true)) !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Cambiar foto</h4>
			</div>
			<div class="modal-body">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					@include('member.forms.photo_form')
				</div>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-success">Guardar cambios</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>