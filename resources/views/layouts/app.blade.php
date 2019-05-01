<!DOCTYPE html>
<html>
<head>
	<title>TodoList</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>

	<div id="footer" class="text-center">
		<p>Copyright &copy; 2019 Todo List</p>
	</div>
</body>
</html>