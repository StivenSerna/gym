<div class="fileinput fileinput-new" data-provides="fileinput">
	<div class="fileinput-new thumbnail" style="width:  180px; height: 220px;">
		<img data-src="holder.js/100%x100%" alt="{{'../../images/members/'}}{{ isset($member->image->name) ? $member->image->name : 'fotogym_placeholder.png' }}"
		src="{{'../../images/members/'}}{{ isset($member->image->name) ? $member->image->name : 'fotogym_placeholder.png' }}">
	</div>
	<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 180px; max-height: 220px;"></div>
	<div>
		<span class="btn btn-primary btn-file"><span class="fileinput-new">Seleccionar foto</span><span class="fileinput-exists">Cambiar</span><input type="file" name="photo"></span>
		<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
	</div>
</div>