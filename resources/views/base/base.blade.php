<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- bootstrap 3.0.2 -->
	<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
	<!-- font Awesome -->
	<link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<!-- Ionicons -->
	<link href="{{URL::asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body class="skin-black">
@yield('navbar')
<div class="container">
	<div class="isi">
		@yield('content')
	</div>
</div>
<br>
@yield('footer')
<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="{{URL::asset('js/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('js/AdminLTE/dashboard.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/modal.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/star-rating.js')}}" type="text/javascript"></script>
</body>
</html>