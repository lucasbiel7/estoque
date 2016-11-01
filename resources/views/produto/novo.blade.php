@extends("layout.cabecalho")
@section("titulo")
<h1>Cadastrar novo produto</h1>
@stop
@section("conteudo")
<form action="/produtos/cadastrar" method="post">
	<input value="{{csrf_token()}}" type="hidden" name="_token"/>
	<div class="form-group">
		<label>Descrição</label><input type="text" class="form-control" name="descricao">
	</div>
	<div class="form-group">
		<label>Valor</label><input type="number" class="form-control" name="valor">
	</div>
	<div class="form-group">
		<label>Quantidade</label><input type="number" class="form-control" name="quantidade">
	</div>
	<button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
@stop