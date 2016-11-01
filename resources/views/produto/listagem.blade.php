@extends('layout.cabecalho')
@section("titulo")
<h1>Lista de produtos</h1>
@stop
@section('conteudo')
@if(old('descricao'))
<div class="alert alert-success">
	<strong>Sucesso!</strong><br/>
	Produto {{old('descricao')}} foi cadastrado com sucesso!	
</div>
	@endif
<table class="table table-striped table-bordered table-hover">
	@if(empty($produtos))
	Você não tem produtos cadastrados
	@else
	<tr>
		<th>Descrição</th>
		<th>Quantidade</th>
		<th>Valor</th>
		<th>Detalhes</th>
		<th>Editar<th>
		<th>Excluir</th>
	</tr>
	@foreach ($produtos as $produto)
	<tr class="{{$produto->quantidade<4 ?'danger':''}}">
		<td> {{$produto->descricao}}</td>
		<td>{{$produto->quantidade}}</td>
		<td>R$ {{$produto->valor}}</td>
		<td><a href="/produtos/mostrar/{{$produto->id}}"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></a></td>
		<td><a href="/produtos/editar/{{$produto->id}}"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i></a></td>
		<td><a href="/produtos/remove/{{$produto->id}}"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
	</tr>
	@endforeach
</table>
<h4>
	<span class="label label-danger pull-right">
		Três ou menos itens no estoque
	</span>
</h4>
@endif

@stop
