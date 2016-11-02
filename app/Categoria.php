<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	//
	protected $table ="categoria";
	protected $fillable=array("nome");
	public $timestamps=false;

	public function produtos(){
		return $this->hasMany("estoque\Produto");
	}	
}
