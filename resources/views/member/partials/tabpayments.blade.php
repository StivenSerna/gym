<h2 class="page-header">Pagos y transacciones</h2><br>

<div class="row">

	<div class="col-lg-3 col-md-3">
		<div
		@if ($member->difUltimoPago < 0)
		class="panel panel-green"
		@elseif($member->difUltimoPago <= 30)
		class="panel panel-primary"
		@elseif($member->difUltimoPago <= 59)
		class="panel panel-yellow"
		@elseif($member->difUltimoPago > 60)
		class="panel panel-red"
		@endif
		>

		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3">
					<i class="fa fa-usd fa-5x"></i>
				</div>
				<div class="col-xs-9 text-right">
					<div class="huge">$ {!! $member->saldo !!}</div>
					<div>Debe actualmente</div>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			@if ($member->payments->first() != null and $member->difUltimoPago >= 0)
			<b>Ultimo pago:</b>
			{!! $member->payments->first()->created_at->format('d/m/Y') !!}
			<b>Hace: </b>{{$member->difUltimoPago}} dias
			<div class="clearfix"></div>
			@elseif($member->difUltimoPago >= 0)
			<b>Desde </b>
			<b>hace: </b>{{$member->difUltimoPago}} dias
			<div class="clearfix"></div>
			@endif
		</div>
	</div>
</div>

</div>

<div class="row">

	<div class="col-lg-6">
		<!-- Panel -->
		<div class="thumbnail">
			<div class="portlet">
				<div class="portlet-title">

					@if ($member->saldo > 0)
					<div class="actions pull-right">
						<a href="" type="button" class="btn btn-green" data-toggle="modal" data-target="#newPayout">
							<i class="fa fa-money"></i>
							Pago / abono
						</a>
					</div>
					@include('member.partials.modal_payout')

					@endif

					<div class="caption">
						<p class="text-success"><i class="fa fa-money"></i>  Pagos y abonos</p>
					</div>
				</div>

				<div class="table-responsive">
					<table id="payments" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Concepto</th>
								<th >Fecha</th>
								<th class="text-right">Monto</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th class="thick-line"></th>
								<th class="thick-line"></th>
								<th class="thick-line">Subtotal</th>
								<th class="thick-line text-right">$ {!! $member->sumaPagos !!}</th>
							</tr>
							<tr>
								<th class="no-line"></th>
								<th class="no-line"></th>
								<th class="no-line">Afiliaciones</th>
								<th class="no-line text-right">$ {!! $member->sumaAffiliations !!}</th>
							</tr>
							<tr>
								<th class="no-line"></th>
								<th class="no-line"></th>
								<th class="no-line">Saldo / Debe</th>
								<th class="thick-line text-right">$ {!! $member->saldo !!}</th>
							</tr>
						</tfoot>
						<tbody>

							@foreach ($member->payments as $payment)
							<tr>
								<td>P-{!! $payment->id + 100000 !!} </td>
								<td>
									@if ($payment->type == 'payment')
									Pago afiliacion de contado
									@else
									Abono a credito
									@endif
								</td>
								<td>{!! $payment->created_at->format("d/m/Y - H:i:s") !!}</td>
								<td class="text-right">$ {!! $payment->amount !!}</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Fin Panel -->
	</div>

</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#payments').dataTable( {
			"language": {
				"url": "{{ asset('plugins/bdt/spanish.json') }}"
			},
			"aoColumnDefs": [
			{ "bSortable": false, "aTargets": [0] }
			]
		} );
	} );
</script>