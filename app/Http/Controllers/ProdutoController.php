<?php 
namespace estoque\Http\Controllers;
use estoque\Produto;
use estoque\Categoria;
use Request;
use Validator;
use estoque\Http\Requests\ProdutoRequest;
use Auth;
class ProdutoController extends Controller{
	
	public function __construct(){
		$this->middleware("autorizador",["only"=>"novo"]);
	}
	public function lista(){
		
		$produtos=Produto::all();
		return view("produto.listagem")->with("produtos",$produtos);
	}

	public function mostra($id){
		$produto=Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe";
		}
		return view("produto.detalhe-produto")->with("produto",$produto);
	}

	public function novo(){
		return view("produto.novo")->with("categorias",Categoria::all());
	}

	public function cadastrar(ProdutoRequest $request){
		Produto::create($request->all());
		return redirect()->action("ProdutoController@lista")->withInput(Request::only('descricao'));
	}

	public function listaJson(){
		$produtos=Produto::all();
		return response()->json($produtos);
	}

	public function excluir($id){
		$produto=Produto::find($id);
		$produto->delete();
		return redirect()->action("ProdutoController@lista");
	}

	public function editar($id){

		$produto=Produto::find($id);
		return view("produto.editar-produto")->with("produto",$produto);
	}

	public function editando(){
		$produto=Produto::find(Request::input("id"));
		$produto->descricao=Request::input("descricao");
		$produto->quantidade=Request::input("quantidade");
		$produto->valor=Request::input("valor");
		$produto->tamanho=Request::input("tamanho");
		$produto->save();
		return redirect()->action("ProdutoController@lista");
	}
}
