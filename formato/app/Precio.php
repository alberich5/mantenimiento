<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model {

	protected $table = 'precio';

	protected $fillable = ['fecha', 'cuadruple', 'triple', 'doble', 'secilla','id_establec'];

}
