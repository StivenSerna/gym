<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('tittle', 'Default') | Panel de administración</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('plugins/bootstrap/css/sb-admin.css') }}" rel="stylesheet">

    <script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Custom Fonts -->
    <link href="{{ asset('plugins/bootstrap/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker3.standalone.css') }}" rel="stylesheet" type="text/css">
    <script src=" {{ asset('plugins/datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src=" {{ asset('plugins/datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="main-container">
    </div>

        <div id="wrapper">
            <!-- Navigation -->
            @include('admin.template.partials.nav')
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- /.row -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        
        <!-- Bootstrap Core JavaScript -->
        

    </body>

    </html>