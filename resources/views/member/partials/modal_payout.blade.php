<!-- Modal -->
<div class="modal fade" id="newPayout" tabindex="-1" role="dialog" aria-labelledby="modalPayout">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-success" id="modalPayout"><i class="fa fa-money"></i> Realizar abono</h4>
			</div>
			{!! Form::open(['route'=>'payment.store', 'method'=>'POST']) !!}
			{!! Form::hidden('member_id', $member->id) !!}
			<div class="modal-body">

				<p class="text-primary"><b>Saldo actual: $ {!! $member->saldo !!}</b></p><hr>

				<div class="form-group">
					{!!Form::label('amount', 'Pago / abono')!!}
					<div class="input-group">
						<div class="input-group-addon">$</div>
						{!! Form::number('amount', null, ['class' => 'form-control', 'id' => 'amount', 'placeholder' => 0,
						'required' => true, 'min' => 0, 'max' => $member->saldo]); !!}
						<span class="input-group-btn">
							<button class="btn btn-info" type="button" id="calcular">Calcular</button>
						</span>
					</div>
				</div>

				<table class="table">
					<tbody>
						<tr>
							<th class="no-line">	Saldo actual: </th>
							<td class="no-line text-right">$ <span id="table-saldo">{!! $member->saldo !!}</span></td>
						</tr>
						<tr>
							<th class="no-line">	Abono: </th>
							<td class="no-line text-right">$ <span id="table-payout">0</span></td>
						</tr>
						<tr>
							<th> Total: </th>
							<td class="thick-line text-right">$ <span id="table-total">{!! $member->saldo !!}	</span></td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<!-- Fin Modal -->

<script type="text/javascript">

	function calcularDiferencia(){
		var payout = $("#amount").val();
		var payoutInt = parseInt(payout);
		var saldo = parseInt($("#table-saldo").text());
		var total = saldo - payoutInt;

		$("#table-payout").text(payout);
		$("#table-total").text(total);
	}

	$("#amount").bind('keyup mouseup', function () {
		calcularDiferencia();
	});

	$("#calcular").click(function(){
		calcularDiferencia();
	});

</script>