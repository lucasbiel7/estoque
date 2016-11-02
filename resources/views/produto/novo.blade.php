@extends("layout.cabecalho")
@section("titulo")
<h1>Cadastrar novo produto</h1>
@stop
@section("conteudo")
@if(count($errors)>0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="/produtos/cadastrar" method="post">
	<input value="{{csrf_token()}}" type="hidden" name="_token"/>
	<div class="form-group">
		<label>Descrição</label><input type="text" class="form-control" name="descricao" value="{{old('descricao')}}">
	</div>
	<div class="form-group">
		<label>Valor</label><input type="number" class="form-control" name="valor" value="{{old('valor')}}">
	</div>
	<div class="form-group">
		<label>Quantidade</label><input type="number" class="form-control" name="quantidade" value="{{old('quantidade')}}">
	</div>
	<div class="form-group">
		<label>Tamanho</label><input type="text" class="form-control" name="tamanho" value="{{old('tamanho')}}">
	</div>
	<div class="form-group">
		<label>Categoria</label>
		<select class="form-control" name="categoria_id">
			@foreach($categorias as $categoria)
				<option value="{{$categoria->id}}">{{$categoria->nome}}</option>
			@endforeach
		</select>
	</div>
	<button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
@stop