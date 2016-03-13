<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login | Admin</title>

	<link rel="shortcut icon" href="{{{ asset('images/icon/vacation.png') }}}">
	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>

	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- Custom Fonts -->
	<link href="{{ asset('plugins/bootstrap/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	<link href="{{ asset('plugins/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css">

	<script src=" {{ asset('plugins/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>

	<style type="text/css">
		/*
 * Globals
 */

 /* Links */
 a,
 a:focus,
 a:hover {
 	color: #fff;
 }

 /* Custom default button */
 .btn-default,
 .btn-default:hover,
 .btn-default:focus {
 	color: #333;
 	text-shadow: none; /* Prevent inheritence from `body` */
 	background-color: #fff;
 	border: 1px solid #fff;
 }

/*
 * Base structure
 */

 html,
 body {
 	height: 100%;
 	background-color: #222;
 }
 body {
 	color: #fff;
 	text-align: center;
 }

 /* Extra markup and styles for table-esque vertical and horizontal centering */
 .site-wrapper {
 	display: table;
 	width: 100%;
 	height: 100%; /* For at least Firefox */
 	min-height: 100%;
 	-webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.8);
 	box-shadow: inset 0 0 100px rgba(0,0,0,.8);
 }
 .site-wrapper-inner {
 	display: table-cell;
 	vertical-align: top;
 }
 .cover-container {
 	margin-right: auto;
 	margin-left: auto;
 }

 /* Padding for spacing */
 .inner {
 	padding: 30px;
 }

/*
 * Footer
 */

 .mastfoot {
 	color: #999; /* IE8 proofing */
 	color: rgba(255,255,255,.5);
 	text-align: center;
 }


/*
 * Affix and center
 */

 @media (min-width: 768px) {
 	/* Pull out the header and footer */
 	.masthead {
 		position: fixed;
 		top: 0;
 	}
 	.mastfoot {
 		position: fixed;
 		bottom: 0;
 	}
 	/* Start the vertical centering */
 	.site-wrapper-inner {
 		padding-top: 10%;
 	}
 	/* Handle the widths */
 	.masthead,
 	.mastfoot,
 	.cover-container {
 		width: 100%; /* Must be percentage or pixels for horizontal alignment */
 	}
 }

 @media (min-width: 992px) {
 	.masthead,
 	.mastfoot,
 	.cover-container {
 		width: 700px;
 	}
 }

</style>

</head>
<body>

	@yield('content')

</body>
</html>