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
<body class="skin-blue">
@yield('navbar')
<aside class="left-side sidebar-offcanvas">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{URL::asset('img/'.Auth::user()->id.'.jpg')}}" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>Hello, {{AUth::user()->name}}</p>

				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
				<span class="input-group-btn">
					<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="active">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-users"></i>
					<span>Users</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{route('list.user')}}"><i class="fa fa-angle-double-right"></i> List Users</a></li>
					<li><a href="#"><i class="fa fa-angle-double-right"></i> Add User</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-music"></i>
					<span>Albums</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{route('list.album')}}"><i class="fa fa-angle-double-right"></i> List Albums</a></li>
					<li><a href="{{route('add.album.index')}}"><i class="fa fa-angle-double-right"></i> Add Album</a></li>
					<li><a href="{{route('list.song')}}"><i class="fa fa-angle-double-right"></i> List Songs</a></li>
					<li><a href="{{route('add.song.index')}}"><i class="fa fa-angle-double-right"></i> Add Song</a></li>
				</ul>
			</li>
			<li>
				<a href="{{route('list.review')}}">
					<i class="fa fa-envelope"></i> <span>List Comment</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

<!-- end of sidebar -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<div class="container">
			@yield('content')
		</div>
	</section>
</aside>

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
</body>
</html>