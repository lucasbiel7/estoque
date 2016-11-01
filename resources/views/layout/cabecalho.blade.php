<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
	<title>Controle de estoque</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			@yield("titulo")
			<li><a href="/produtos">Listar de produtos</a></li>
			<li><a href="/produtos/novo">Novo</a></li>
		</nav>
		@yield('conteudo')
		<footer class="footer">
			Sistema desenvolvido por Lucas Gabriel de Souza Dutra
		</footer>
	</div>
</body>
</html>