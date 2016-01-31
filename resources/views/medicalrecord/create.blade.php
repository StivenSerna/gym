@extends('admin.template.main')

@section('tittle', 'Ficha')

@section('content')

<!-- Page titulo -->

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			REGISTRO DE FICHA MEDICA  
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Inicio
			</li>
		</ol>
	</div>
</div>

<!-- Page fin titulo -->

{!! Form::open() !!}


<div class="row" >

	<div class="col-lg-12">
  	
  	{!!Form::submit('Siguiente', ['class' => 'btn btn-success'])!!}
  </div>


	</div>


{!! Form::close() !!}
<br>



@endsection