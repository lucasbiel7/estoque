<?php

Route::get('/',function (){
	return "<h1>Primeira lógica com Laravel</h1>";
});

Route::get("/produtos","ProdutoController@lista");
Route::get("/produtos/mostrar/{id}","ProdutoController@mostra");
Route::get("/produtos/novo","ProdutoController@novo");
Route::post("/produtos/cadastrar","ProdutoController@cadastrar");
Route::resource("/produtos/json","ProdutoController@listaJson");
