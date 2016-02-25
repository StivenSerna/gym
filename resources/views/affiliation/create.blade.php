@extends('admin.template.main')

@section('tittle', 'Perfil')

@section('stylesheet')
<link href="{{ asset('plugins/steps/steps.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/steps/steps.js') }}"></script>
<script src=" {{ asset('plugins/steps/date.js') }}"></script>
@endsection

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Realizar pago/credito de afiliación
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
@endsection

@section('content')

<div class="row">
	<section>
		<div class="wizard">
			<div class="wizard-inner">
				<div class="connecting-line"></div>
				<ul class="nav nav-tabs" role="tablist">

					<li role="presentation" class="active">
						<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
							<span class="round-tab">
								<i class="glyphicon glyphicon-tag"></i>
							</span>
						</a>
					</li>

					<li role="presentation" class="disabled">
						<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
							<span class="round-tab">
								<i class="fa fa-money"></i>
							</span>
						</a>
					</li>

					<li role="presentation" class="disabled">
						<a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
							<span class="round-tab">
								<i class="fa fa-table"></i>
							</span>
						</a>
					</li>
				</ul>
			</div>

			{!! Form::open(['route'=>'affiliation.store', 'method'=>'POST']) !!}
			{!! Form::hidden('member_id', $member->id) !!}
			<div class="tab-content">

				<div class="tab-pane active" role="tabpanel" id="step1">

					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">

							<h3>Seleccion de membresia</h3><br>
							<p>
								Seleccione una de las membresias disponibles, si necesita crear una nueva dirijase a la seccion de
								<a href="{{ route('membership.index') }}"> membresias</a>.
							</p><br>
							<div class="form-group">
								{!! Form::label('memberchip_id', 'Membresia') !!}
								{!! Form::select('membership_id', $memberships, null, ['class' => 'form-control', 'id' => 'membership_id']) !!}
							</div><br><br>

							<ul class="list-inline pull-right">
								<li><button type="button" class="btn btn-success next-step" id="continue1"><i class="fa fa-chevron-right"></i> Continuar</button></li>
							</ul>

						</div>
					</div>

				</div>

				<div class="tab-pane" role="tabpanel" id="step2">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">

							<div class="row">

								<div class="col-md-5">
									<h3>Fecha de inicio para la membresia</h3><br>

									<p>Seleccione la fecha desde la cual empezara a correr la membresia.</p><br>
									<div class="form-group">
										{!!Form::label('initiation', 'Fecha de inicio')!!}
										<div class='input-group date' data-provide="datepicker">
											{!! Form::text('initiation', null, array('class'=>'form-control', 'id' => 'initiation')) !!}
											<div class="input-group-addon">
												<span class='fa fa-calendar'></span>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="exampleInputAmount">Finalización</label>
										<div class="input-group">
											<input type="text" class="form-control" id="finalization" disabled value="000-00-00">
											<div class="input-group-addon">
												<span class='fa fa-calendar'></span>
											</div>
										</div>
									</div>

									<div class="thumbnail">
										<div class="caption">
											<p class="text-center">Duración de la membresia: <span id="display-month"> - </span> meses y <span id="display-day"> - </span> dias</p>
										</div>
									</div>

								</div>

								<div class="col-md-1">
								</div>

								<div class="col-md-6">
									<h3>Forma de pago</h3><br>

									<p>Seleccione una forma de pago.</p><br>

									<div class="form-group">
										{!!Form::label('type', 'Forma de pago')!!}
										{!! Form::select('type', array('payment' => 'Contado', 'credit' => 'Credito'), 'payment', ['class' => 'form-control', 'id' => 'type']); !!}
									</div><br>

									<div class="form-group">
										{!!Form::label('payout', 'Pago / abono')!!}
										<div class="input-group">
											<div class="input-group-addon">$</div>
											{!! Form::number('payout', '0', ['class' => 'form-control', 'id' => 'payout', 'disabled' => true]); !!}
											<span class="input-group-btn">
												<button class="btn btn-info" type="button" id="calcular">Calcular</button>
											</span>
										</div>
									</div><br>

									<table class="table table-bordered">
										<tr>
											<th>Costo</th>
											<td class="text-right">$ <span id="display-price"> - </span></td>
										</tr>
										<tr>
											<th><span id="display-payout-tittle"> Pago </span></th>
											<td class="text-right">$ <span id="display-payout"> - </span></td>
										</tr>
										<tr>
											<th>Saldo</th>
											<td class="text-right">$ <span id="display-saldo"> - </span></td>
										</tr>

									</table><hr>

								</div>


							</div><br><br><br>

							<ul class="list-inline pull-right">
								<li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
								<li><button type="button" class="btn btn-success next-step" id="continue2"><i class="fa fa-chevron-right"></i> Continuar</button></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="tab-pane" role="tabpanel" id="complete">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<h3>Verificacion de datos</h3><br>
							<p>Verifique los datos provistos y presione aceptar para crear la nueva aficliacion.</p><br>
							<address>
								<strong>Afiliado</strong><br>
								{!! ucfirst($member->first_name) ." ". ucfirst($member->second_name) ." ". ucfirst($member->last_name) !!}<br>
								{!! $member->document !!}<br>
								<i class="fa fa-phone"></i>  {!! $member->phone !!}
							</address>
							<address>
								<strong>Metodo de pago</strong><br>
								<p id="method-payout-facture"> - </p>
							</address><br>

							<table class="table table-condensed">
								<tr>
									<th><strong>Membresia</strong></th>
									<th class="text-center">Inicio</th>
									<th class="text-center">Finlaización</th>
									<th class="text-right">Precio</th>
								</tr>
								<tr>
									<td><span id="membership-facture"> - </span></td>
									<td class="text-center"><span id="initiation-facture"> - </span></td>
									<td class="text-center"><span id="finalization-facture"> - </span></td>
									<td class="text-right">$ <span id="price-facture"> - </span></td>
								</tr>
								<tr>
									<td class="thick-line"></td>
									<td class="thick-line"></td>
									<td class="thick-line text-center"><strong>Total</strong></td>
									<td class="thick-line text-right">$ <span id="total-facture"> - </span></td>
								</tr>
								<tr>
									<td class="no-line"></td>
									<td class="no-line"></td>
									<td class="no-line text-center"><strong id="payout-tittle-facture"> Pago </strong></td>
									<td class="no-line text-right">$ <span id="payout-facture"> - </span></td>
								</tr>
								<tr>
									<td class="no-line"></td>
									<td class="no-line"></td>
									<td class="no-line text-center"><strong> Saldo </strong></td>
									<td class="thick-line text-right">$ <span id="saldo-facture"> - </span></td>
								</tr>

							</table><br>

							<ul class="list-inline pull-right">
								<li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
								<li><button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button></li>
							</ul>

						</div>
					</div>

				</div>

				<div class="clearfix">
				</div>
			</div>
			{!! Form::close() !!}

		</div>
	</section>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<div>
	@foreach ($membershipsAll as $membership)
	<span type="hidden" id="hidden-00{{ $membership->id }}" price="{{ $membership->price }}" month="{{ $membership->month }}" day="{{ $membership->day }}" description="{{ $membership->description }}"></span>
	@endforeach
</div>

<script>
	$(document).ready(function () {

		$(function(){

			$('#escala').change(function() {
				var secret = jQuery('option:selected', this).attr('secret');
				$('#descripcion').text(secret);
			});

		});
		// parse para la fecha

		function parseDate(input) {
			var parts = input.split('-');
			var date = new Date(parts[0], parts[1]-1, parts[2]);
			var datepartida = (("0" + (date.getMonth() + 1))).slice(-2) + '.' + ("0" + date.getDate()).slice(-2) + '.' + date.getFullYear();
			return datepartida;
		}

		function stepUnoCambio(){
			var memshipid = $('#membership_id').val();
			var date = parseDate($('#initiation').val());

			var d1 = Date.parse(date);

			var price = $("#hidden-00" + memshipid).attr('price');
			var months = $("#hidden-00" + memshipid).attr('month');
			var days = $("#hidden-00" + memshipid).attr('day');
			var type = $('#type').val();
			var payout = $('#payout').val();

			$("#display-month").text(months);
			$("#display-day").text(days);
			$("#display-price").text(price);

			if(type == 'payment'){
				$('#payout').val(price);
			}
			else if(type == 'credit'){
				$('#payout').val('0');
			}

			// add month to date
			d1.addMonths(parseInt(months));
    		//add days to date
    		d1.add(parseInt(days)).days();
    		$('#finalization').val(d1.toString('yyyy-MM-dd'));
    	}

		// para obtener el precio de la input

		$('#continue1').click(function() {
			stepUnoCambio();
		});

		$('#membership_id').change(function() {
			stepUnoCambio();
		});

		//alterar fecha finalizacion

		$('#initiation').change(function () {
			var date = parseDate($(this).val());

			var d1 = Date.parse(date);

			var memshipid = $('#membership_id').val();
			var price = $("#hidden-00" + memshipid).attr('price');
			var months = $("#hidden-00" + memshipid).attr('month');
			var days = $("#hidden-00" + memshipid).attr('day');

    		// add month to date
    		d1.addMonths(parseInt(months));

    		//add days to date
    		d1.add(parseInt(days)).days();

    		$('#finalization').val(d1.toString('yyyy-MM-dd'));
    		$("#display-month").text(months);
    		$("#display-day").text(days);

    	});

		$('#type').change(function() {
			var type = $(this).val();
			var memshipid = $('#membership_id').val();
			var price = $("#hidden-00" + memshipid).attr('price');
			var payout = $('#payout').val();

			if(type == 'payment'){
				$('#payout').prop('disabled', true);
				$('#payout').val(price);
				$("#display-payout-tittle").text('Pago');
			}
			else{
				$('#payout').prop('disabled', false);
				$('#payout').val('0');
				$("#display-payout-tittle").text('Abono');
			}
		});

		$('#calcular').click(function() {
			var memshipid = $('#membership_id').val();
			var price = parseInt($("#hidden-00" + memshipid).attr('price'));
			var payout = parseInt($('#payout').val());

			var saldo = price - payout;

			$("#display-price").text(price);
			$("#display-payout").text(payout);
			$("#display-saldo").text(saldo);
		});

		$('#continue2').click(function() {

			var memshipid = $('#membership_id').val();
			var price = parseInt($("#hidden-00" + memshipid).attr('price'));
			var payout = parseInt($('#payout').val());
			var membership = $("#hidden-00" + memshipid).attr('description');
			var initiation = $('#initiation').val();
			var finalization = $('#finalization').val();
			var type = $("#type option:selected").text();

			$("#price-facture").text(price);
			$("#initiation-facture").text(initiation);
			$("#finalization-facture").text(finalization);
			$("#membership-facture").text(membership);
			$("#total-facture").text(price);
			$("#method-payout-facture").text(type);
			$("#payout-facture").text(payout);

			var saldo = price - payout;
			$("#saldo-facture").text(saldo);

		});

	});
</script>

<script type="text/javascript">

	$('.input-group.date').datepicker({

		format: "yyyy-mm-dd",
		language: "es",
		todayBtn: "linked",
		autoclose: true,
		orientation: "bottom left"

	});

</script>


@endsection