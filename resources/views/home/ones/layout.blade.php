<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<style type="text/css">
		table,td{font-family:微软雅黑;text-align:center;}
		h3{font-family:微软雅黑;}
		.cur{width:100px;}
		.ids{width:50px;}
	</style>

	<script src='/bs/js/jquery.js'></script>
	<script src='/bs/js/bootstrap.min.js'></script>
	<link rel="stylesheet" href="/bs/css/bootstrap.min.css">
</head>
<body>
	<center>
		@include('home.news.menu')

		@section('content')


		@show
	</center>	
</body>
</html>