<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'descricao'=>'required|min:3|max:255',
			'valor'=>'required',
			'quantidade'=>'required',
			'tamanho'=>'required'
		];
	}

	public function messages(){
		return ["required"=>"O :attribute é obrigatorio"];
	}
}
