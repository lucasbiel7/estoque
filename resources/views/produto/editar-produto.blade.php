@extends("layout.cabecalho")
@section("titulo")
<h1>Editar produto</h1>
@stop
@section("conteudo")
<form action="/produtos/editando" method="post">
	<input value="{{csrf_token()}}" type="hidden" name="_token"/>
	<input value="{{$produto->id}}" type="hidden" name="id"/>
	<div class="form-group">
		<label>Descrição</label><input type="text" class="form-control" name="descricao" value="{{$produto->descricao}}">
	</div>
	<div class="form-group">
		<label>Valor</label><input type="number" class="form-control" name="valor" value="{{$produto->valor}}">
	</div>
	<div class="form-group">
		<label>Quantidade</label><input type="number" class="form-control" name="quantidade" value="{{$produto->quantidade}}">
	</div>
	<button class="btn btn-primary" type="submit">Editar</button>
</form>
@stop