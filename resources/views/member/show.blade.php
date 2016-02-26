@extends('admin.template.main')

@section('tittle', 'Perfil')

@section('stylesheet')
<link href="{{ asset('plugins/slider/bootstrap-slider.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/bdt/dateTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/slider/bootstrap-slider.min.js') }}"></script>
<script src=" {{ asset('plugins/chart/highcharts.js') }}"></script>
<script src=" {{ asset('plugins/chart/exporting.js') }}"></script>
<script src=" {{ asset('plugins/bdt/jquery.dateTables.js') }}"></script>

<link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.standalone.css') }}" rel="stylesheet" type="text/css">
<script src=" {{ asset('plugins/datepicker/js/bootstrap-datepicker.js') }}"></script>
@endsection

@section('header')

<!-- Page titulo -->
<h1 class="page-header">
	Perfil
</h1>
<ol class="breadcrumb">
	<li class="active">
		<i class="fa fa-dashboard"></i> Inicio
	</li>
</ol>
@endsection

@section('content')



<div class="row panel">
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
	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
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
<div class="tab-content">
	<div role="tabpanel" class="tab-pane fade in active" id="home">
		<p></p><br>
		<!-- contenido tab 1 -->

		@include('member.partials.tabpersonal')
		<!-- fin contenido tab 1 -->
	</div>

	<div role="tabpanel" class="tab-pane fade" id="metrics">
		<p></p><br>
		<!-- contenido tab 2 -->
		@include('member.partials.tabantropometrica')
	</div>

	<div role="tabpanel" class="tab-pane fade" id="membership-member">
		<p></p><br>
		<!-- contenido tab 2 -->
		@include('member.partials.tabmembresia')
	</div>

	<div role="tabpanel" class="tab-pane fade" id="credit">
		<p></p><br>
		<!-- contenido tab 2 -->
		creditos
	</div>

</div><br><br><br>

<br><br><br><br><br><br><br><br><br><br><br><br>

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