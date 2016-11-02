@extends("layout.cabecalho");
@section("titulo")
<h1>Autenticação do usuário</h1>
@stop
@section("conteudo")
<form method="post" action="/login">
	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	<div class="form-group" >
		<label>Login</label>
		<input type="text" name="email" class="form-control"/>
	</div>
	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="password" class="form-control"/>
	</div>
	<button type="submit" class="btn btn-primary">Login</button>
</form>
@stop

