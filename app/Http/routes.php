<?php

Route::get('/',"ProdutoController@lista");

Route::get("/produtos","ProdutoController@lista");
Route::get("/produtos/mostrar/{id}","ProdutoController@mostra");
Route::resource("/produtos/json","ProdutoController@listaJson");

Route::get("/produtos/novo","ProdutoController@novo");
Route::post("/produtos/cadastrar","ProdutoController@cadastrar");

Route::get("/produtos/remove/{id}","ProdutoController@excluir");

Route::get("/produtos/editar/{id}","ProdutoController@editar");
Route::post("/produtos/editando","ProdutoController@editando");

Route::get("home","HomeController@index");
Route::controllers(['auth'=>'Auth\AuthController',
	'password'=>'Auth\PasswordController']
	);

Route::get("/login","LoginController@form");
Route::post("/login","LoginController@login");