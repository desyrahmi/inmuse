<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title')</title>
	<link href="{{ URL::asset('css/bootstrap-responsive.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('css/cssku.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <link href="{{ URL::asset('css/navbar.css') }}" rel="stylesheet"/> -->
	<link href="{{ URL::asset('color/default.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"/>
	@yield('moreStyles')
</head>
<body>
	@yield('navbar')
	
		@yield('content')

	@yield('footer')
	<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="js/jquery.js"></script>
	<!-- nav -->
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<!-- localScroll -->
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- prettyPhoto -->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- Works scripts -->
	<script src="js/isotope.js"></script>
	<!-- flexslider -->
	<script src="js/jquery.flexslider.js"></script>
	<!-- inview -->
	<script src="js/inview.js"></script>
	<!-- animation -->
	<script src="js/animate.js"></script>
	<!-- twitter -->
	<script src="js/jquery.tweet.js"></script>
	<!-- contact form -->
	<script src="js/validate.js"></script>
	<!-- custom functions -->
	<script src="js/custom.js"></script>
  	<script src="{{URL::asset('js/star-rating.js')}}"></script>
	@yield('moreScripts')
</body>
</html>