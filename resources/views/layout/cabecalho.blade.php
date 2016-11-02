<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<title>Controle de estoque</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			@yield("titulo")
			@if(!Auth::guest())
			<li><a href="/produtos">Listar de produtos</a></li>
			<li><a href="/produtos/novo">Novo</a></li>
			@endif
		</nav>
		@yield('conteudo')
		<footer class="footer">
			Sistema desenvolvido por Lucas Gabriel de Souza Dutra
		</footer>
	</div>
</body>
</html>