<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js" defer></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.status-session')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name') }} | copyright @ {{ date('Y') }}
		</footer>
	</div>
</body>
</html>