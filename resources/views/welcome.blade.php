@extends('admin.template.main')

@section('tittle', 'Inicio')

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

<script type="text/javascript">
	$("#page-inicio").addClass("active");
</script>


@endsection