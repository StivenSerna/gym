<div class="modal fade" id="medicaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		{!! Form::model($member->medicalrecord, array('route' => array('medicalrecord.update', $member->id), 'method'=>'PUT', 'files' => true)) !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Editar informacion medica</h4>
			</div>
			<div class="modal-body">


					@include('medicalrecord.forms.medicalrecord_form_edit')


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-success">Guardar cambios</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
