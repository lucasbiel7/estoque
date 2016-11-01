<?php

Route::get('/',function (){
	return "<h1>Primeira lógica com Laravel</h1>";
});

Route::get("/produtos","ProdutoController@lista");
Route::get("/produtos/mostrar/{id}","ProdutoController@mostra");
Route::resource("/produtos/json","ProdutoController@listaJson");

Route::get("/produtos/novo","ProdutoController@novo");
Route::post("/produtos/cadastrar","ProdutoController@cadastrar");

Route::get("/produtos/remove/{id}","ProdutoController@excluir");

Route::get("/produtos/editar/{id}","ProdutoController@editar");
Route::get("/produtos/editar/{id}","ProdutoController@editando");
