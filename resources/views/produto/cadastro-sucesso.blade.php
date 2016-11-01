@extends("layout.cabecalho")
@section("titulo")
<h1>Cadastro realizado com sucesso!</h1>
@stop
@section("conteudo")
<div class="alert alert-success">
	<strong>Sucesso!</strong><br/>
	Produto {{$nome}} foi cadastrado com sucesso!	
</div>
@stop