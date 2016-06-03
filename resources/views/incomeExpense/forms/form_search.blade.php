<div class="thumbnail">
	<div class="portlet">
		{!! Form::open(['route' =>'incomeExpense.search', 'method'=>'GET']) !!}
		<h4 class="text-center">Filtros</h4><hr>

		<h5 class="text-center text-primary">Fecha</h5>
		<div class="form-group">
		<input type="text" id="daterange" name="desde-hasta" class="form-control" placeholder="Desde - Hasta">
		</div>

		<h5 class="text-center text-primary">Descripción</h5>
		<div class="form-group">
			<input type="text" name="description" class="form-control" id="exampleInputEmail3" placeholder="Descripción">
		</div>
		<h5 class="text-center text-primary">Tipo</h5>
		<div class="checkbox">
			<label>
				<input name="typeIn" type="checkbox" value="true">
				Ingreso
			</label>
			<label class="pull-right">
				<input name="typeOut" type="checkbox" value="true">
				Egreso
			</label>
		</div><br>
		<button type="submit" class="btn btn-default btn-block">Buscar</button>
		{!! Form::close() !!}
	</div>
</div>