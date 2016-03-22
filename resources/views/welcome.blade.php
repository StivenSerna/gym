@extends('admin.template.main')

@section('tittle', 'Inicio')

@section('stylesheet')

<link href="{{ asset('plugins/NProgress/nprogress.css') }}" rel="stylesheet">
<script src="{{ asset('plugins/NProgress/nprogress.js') }}"></script>

@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Dashboard <small>inicio</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> incio
			</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-birthday-cake fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{!! count($birthdays) !!}</div>
						<div>¡Cumpleaños hoy!</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">Ver detalles</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>

@foreach ($birthdays as $member)
	{{$member->first_name}}
@endforeach

<!--
<div class="thumbnail">
	<div class="portlet">
		<div class="portlet-title">
			<div class="actions pull-right">
				<span class="clickable"><i class="fa fa-chevron-up"></i></span>
				<a class="btn btn-blue" data-toggle="modal" data-target="#newMembership">
					<i class="fa fa-plus"></i>
					Nueva
				</a>
			</div>
			<div class="caption">
				<p class="text-primary"><i class="fa fa-credit-card"></i> Membresias</p>
			</div>
		</div>
		<div class="thumbnail-collapse collapse in">
			<div class="portlet-body">

			</div>
		</div>
	</div>
</div>-->

<script type="text/javascript">
	$("#page-inicio").addClass("active");
</script>

<script>
NProgress.configure({ showSpinner: false});
NProgress.start();
NProgress.done();
</script>

@endsection