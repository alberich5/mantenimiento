<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PruebaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('layout.login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	public function getInsertar()
	{
		DB::table('localidad')->insert(
			['id_localidad' => 'L13', 'nom_loc' => 'omar', 'folio' => 44]
		);
		echo "Se ingreso";
	}

	public function getMostrar()
	{
		$cineastas = DB::table('cineastas')->get();

		foreach ($cineastas as $cineasta) {
			var_dump($cineasta->nombre);
		}
	}


	public function store(Request $request)
	{

		\App\Prueba::create([
			'nombre' => $request ['name'],
			'apellido_pater' => $request ['ape1'],
			'apellido_mater' => $request ['ape2'],
			]);
		return "Se guardaron datos de prueba";
	}



public function getHola()
{
	echo "<h3>SQL en Laravel 5</h3>";
	echo "<h4>victorroblesweb.es</h4>";
	$results = DB::select('select * from cineastas where id = ?', [1]);
	var_dump($results);

	echo "<hr/>Select pasandole parametros en un array asociativo<br/>";
	$results = DB::select('select * from cineastas where id = :id', ['id' => 1]);
	var_dump($results);

	echo "<hr/>Insertar en la base de datos<br/>";
	DB::insert('insert into cineastas (nombre, edad) values (?, ?)', ['Tarantino', '52']);
	$results = DB::select('select nombre from cineastas where nombre = :nombre and edad = :edad', ["nombre" => "Tarantino", "edad"=>"52"]);
	var_dump($results);

	echo "<hr/>Actualizar registros en la base de datos<br/>";
	DB::update('update cineastas set edad = 53 where nombre = ?', ['Tarantino']);
	$results = DB::select('select nombre, edad from cineastas where nombre = :nombre LIMIT 1', ["nombre" => "Tarantino"]);
	var_dump($results);

	echo "<hr/>Eliminar registros en la base de datos<br/>";
	 DB::delete('delete from cineastas where nombre="Tarantino"');
	 $results = DB::select('select nombre from cineastas where nombre = :nombre', ["nombre" => "Tarantino"]);
	 var_dump($results);

	 echo "<hr/>Ejecutar otro tipo de consulta<br/>";
	 $results=DB::statement('create table if not exists victor(id int(255));');
	 var_dump($results);

	 $results=DB::statement('drop table victor;');
	 var_dump($results);
}



}
