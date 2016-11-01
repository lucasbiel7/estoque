@extends('layout.cabecalho')
@section("titulo")
<h1>Lista de produtos</h1>
@stop
@section('conteudo')
@if(old('txDescricao'))
<div class="alert alert-success">
	<strong>Sucesso!</strong><br/>
	Produto {{old('txDescricao')}} foi cadastrado com sucesso!	
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
		<th></th>
	</tr>
	@foreach ($produtos as $produto)
	<tr class="{{$produto->quantidade<4 ?'danger':''}}">
		<td> {{$produto->descricao}}</td>
		<td>{{$produto->quantidade}}</td>
		<td>R$ {{$produto->valor}}</td>
		<td><a href="/produtos/mostrar/{{$produto->id}}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></a></td>
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
