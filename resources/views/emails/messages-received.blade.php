<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mensaje recibido</title>
</head>
<body>
	<p>Recibiste un  mensaje de: {{ $msg['nombre'] }} - {{ $msg['email'] }}</p>
	<p><strong>Asunto: </strong>{{ $msg['subject'] }}</p>
	<p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
</body>
</html>