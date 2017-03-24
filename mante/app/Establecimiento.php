<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model {

	protected $table = 'establecimiento';

	protected $fillable = ['ID','Nombre', 'Cve_Local', 'Categoria','CuartosReg','status'];


	public function scopeName($query, $name){

		if(trim($name) !="")
		{
			//$query->where('Nombre',"LIKE","%$name%");
			$query->where('Cve_Local',$name);
		}
		

	}

}

