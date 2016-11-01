<?php 
namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;
class ProdutoController extends Controller{
	
	public function lista(){
		$produtos=Produto::all();
		return view("produto.listagem")->with("produtos",$produtos);
	}

	public function mostra(){
		$id=Request::route("id");
		$produto=Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe";
		}
		return view("produto.detalhe-produto")->with("produto",$produto);
	}

	public function novo(){
		return view("produto.novo");
	}

	public function cadastrar(){
		$produto=new Produto();
		$produto->descricao=Request::input("txDescricao");
		$produto->valor=Request::input("txValor");
		$produto->quantidade=Request::input("txQuantidade");
		$produto->save();
		return redirect()->action("ProdutoController@lista")->withInput(Request::only('txDescricao'));
	}

	public function listaJson(){
		$produtos=Produto::all();
		return response()->json($produtos);
	}
}
