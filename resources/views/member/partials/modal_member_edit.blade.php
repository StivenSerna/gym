<div class="modal fade" id="memberedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		{!! Form::model($member, array('route' => array('admin.member.update', $member->id), 'method'=>'PUT', 'files' => true)) !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Editar informacion personal</h4>
			</div>
			<div class="modal-body">


					@include('member.forms.member_form_edit')


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-success">Guardar cambios</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.datepicker').datepicker({

		format: "yyyy-mm-dd",
		language: "es",
		todayBtn: "linked",
		autoclose: true,
		orientation: "top right"
	});

	$('.birthdate').datepicker({
		format: "yyyy-mm-dd",
		startView: 2,
		language: "es",
		orientation: "bottom left",
		autoclose: true
	});
/*
	function mostrarImagen(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#img_destino').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#photo").change(function(){
		mostrarImagen(this);
	});
*/
</script>