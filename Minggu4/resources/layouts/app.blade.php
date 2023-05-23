<!DOCTYPE html>
<html lang="{{ str_replace('_','_' app()->getLocale())}}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Complatible" content="ie-edge">
	<title>{{ config('app.name')}}</title>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			@yield('content')
		</div>
	</div>
</body>
</html>