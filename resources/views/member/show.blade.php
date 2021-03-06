@extends('admin.template.main')

@section('tittle', 'Perfil')

@section('stylesheet')
<link href="{{ asset('plugins/slider/bootstrap-slider.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/bdt/dateTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/steps/tablasSuma.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/slider/bootstrap-slider.min.js') }}"></script>
<script src=" {{ asset('plugins/chart/highcharts.js') }}"></script>
<script src=" {{ asset('plugins/chart/exporting.js') }}"></script>
<script src=" {{ asset('plugins/bdt/jquery.dateTables.js') }}"></script>

<link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.standalone.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src=" {{ asset('plugins/datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

@endsection

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Perfil <span class="text-capitalize">{!! $member->first_name ." ". $member->second_name ." ". $member->last_name !!}</span>
</h1>
<ol class="breadcrumb">
	<li>
		<a href="{{ route("inicio") }}"><i class="fa fa-dashboard"></i> Inicio</a>
	</li>
	<li>
		<a href="{{ route("admin.member.index") }}"><i class="fa fa-users"></i> Miembros</a>
	</li>
	<li class="active">
		<i class="fa fa-user"></i> Perfil <span class="text-capitalize">{!! $member->first_name!!}</span>
	</li>
</ol>
@endsection

@section('content')

<!-- Comienzo pruebas -->
<!-- fin pruebas -->

<div class="row panel" style="background-color: #f7f7f7;">
	<div class="col-md-3 bg_blur">

	</div>
	<div class="col-md-9 col-xs-12">
		<img src='{{'../../images/members/'}}{{ isset($member->image->name) ? $member->image->name : 'fotogym_placeholder.png' }}' class="img-thumbnail picture hidden-xs hidden-sm" />
		<img src='{{'../../images/members/'}}{{ isset($member->image->name) ? $member->image->name : 'fotogym_placeholder.png' }}' class="img-thumbnail visible-xs visible-sm picture_mob" />
		<div class="actions">
			<button type="button" data-toggle="modal" class="btn btn-blue btn-xs pull-right" data-target="#memberedit">
				<i class="fa fa-camera"></i>
				Actualizar
			</button>
		</div>

		<div class="header-blur">
			<h1>{!! ucfirst($member->first_name) ." ". ucfirst($member->second_name) ." ". ucfirst($member->last_name) !!} <br>
				<small>
					<i class="fa fa-envelope"></i>  {!! $member->email !!}
				</small>
			</h1>

		</div>

	</div>

</div>

@include('member.partials.modal_member_edit')


<!-- Modal -->


<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified" role="tablist">
	<li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">
		<i class="fa fa-info-circle"></i> Información Personal/Medica</a>
	</li>
	<li role="presentation"><a href="#metrics" aria-controls="metrics" role="tab" data-toggle="tab">
		<i class="fa fa-list-ol"></i> Información Antropometrica</a>
	</li>
	<li role="presentation"><a href="#membership-member" aria-controls="membership-member" role="tab" data-toggle="tab">
		<i class="fa fa-credit-card"></i> Membresia</a>
	</li>
	<li role="presentation"><a href="#credit" aria-controls="credit" role="tab" data-toggle="tab">
		<i class="fa fa-money"></i> Pagos/Creditos</a>
	</li>
</ul>

<!-- Tab panes -->
<div class="tab-content" style="border: 1px solid #ddd;">
	<div role="tabpanel" class="tab-pane fade in active" id="personal">

		<!-- contenido tab 1 -->

		@include('member.partials.tabpersonal')
		<!-- fin contenido tab 1 -->
	</div>

	<div role="tabpanel" class="tab-pane fade" id="metrics">
		<!-- contenido tab 2 -->
		@include('member.partials.tabantropometrica')
	</div>

	<div role="tabpanel" class="tab-pane fade" id="membership-member">
		<!-- contenido tab 2 -->
		@include('member.partials.tabmembresia')
	</div>

	<div role="tabpanel" class="tab-pane fade" id="credit">
		<!-- contenido tab 2 -->
		@include('member.partials.tabpayments')
	</div>

</div><br><br><br>



<script type="text/javascript">
	var url = document.location.toString();
	if (url.match('#')) {
		$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
	}

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
	window.location.hash = e.target.hash;
})

</script>



@endsection