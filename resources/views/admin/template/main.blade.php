<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('tittle', 'Default') | Panel de administración</title>

    <link rel="shortcut icon" href="{{{ asset('images/icon/vacation.png') }}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('plugins/bootstrap/css/sb-admin.css') }}" rel="stylesheet">


    <script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/plugins/metisMenu/metisMenu.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/sb-admin.js') }}"></script>
    <!-- Custom Fonts -->
    <link href="{{ asset('plugins/bootstrap/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('plugins/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    @yield('stylesheet')
    <script src=" {{ asset('plugins/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>

    <!--<script src=" {{ asset('plugins/datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>-->

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
                <div class="row">
                    <div class="col-lg-12">
                        @yield('header')
                    </div>
                </div>
                <!-- /.row -->
                @include('flash::message')
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