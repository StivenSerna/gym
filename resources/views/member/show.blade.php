@extends('admin.template.main')

@section('tittle', 'Ficha antropometricca')

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
<!-- end Page titulo -->

@endsection

@section('content')

<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="thumbnail">
			<div class="row">
				<div class="col-xs-6 col-md-3 .col-md-offset-3">
					<a href="#" class="thumbnail">
						<img src="{{'../../images/members/'}}{{ $member->image->name }}" alt="..." class="img-circle">
					</a>
				</div>
				...
			</div>
			<div class="caption">
				<h3>Thumbnail label</h3>
				<p>...</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			</div>
		</div>
	</div>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified" role="tablist">
	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
		<i class="fa fa-info-circle"></i>Información Personal/Medica</a>
	</li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Información Antropometrica</a>
	</li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pagos</a>
	</li>
	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Creditos</a>
	</li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="home">
		<p></p><br>
		<!-- contenido tab 1 -->
		@include('member.partials.tabpersonal')
		<!-- fin contenido tab 1 -->
	</div>
	<div role="tabpanel" class="tab-pane" id="profile">
		<p></p><br>
		<!-- contenido tab 2 -->
		@include('member.partials.tabantropometrica')
	</div>

</div>

</div>

@endsection