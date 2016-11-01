@extends('layout.cabecalho')
@section("titulo")
<h1>Detalhes do produto {{$produto->descricao or "Não tem descrição"}}</h1>
@stop
@section('conteudo')
<ul>
	<li><b>Quantidade</b> {{$produto->quantidade}} </li>
	<li><b>Valor</b> {{$produto->valor}}</li>
</ul>
@stop