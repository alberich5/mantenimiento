<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Establecimiento;

use App\Ocupacion;

use Illuminate\Http\Request;

class OcupacionController extends Controller {

	public function getOrm()
	{
		$result =Establecimiento::join('localidad', 'establecimiento.id_localidad', '=', 'localidad.id_localidad')
		//->where('id_localidad','=','1')
		->get();
		dd($result->toArray());
	}

	public function getIndex()
	{
		$result = \DB::table('establecimiento')
		->select(['nombre'])
		->where('id_localidad','1')
		//->join('localidad','id_localidad','=','localidad.id_localidad')
		->join('localidad', 'establecimiento.id_localidad', '=', 'localidad.id_localidad')
		->get();
		//dd($result);
		return view('captura.ocupacion',compact('result'));
	}

	

	public function index()
	{
		$ocupa = Ocupacion::orderBy('Fecha','DES')->get();
		return view('consulta.ocupacion',compact('ocupa'));
	}

	public function create(Request $request)
	{
		$estable = Establecimiento::where('Cve_Local',$request['local'])
		->where('Categoria',$request['cate'])
		->get();

		return view('captura.ocupacion',compact('estable'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$rules = array(
			
			'disponible' => 'required',
			'ocupado' => 'required'
			);

		$this->validate($request, $rules);

		$id = $request['local'].'/'.$request['estable'];
		
		Ocupacion::create([
			'id_est' => $id, 
		 	'Fecha' => $request['fecha'], 
		 	'CtosDisp' => $request['disponible'],
		 	'CtosOcup' => $request['ocupado'],
		 	]);
		return redirect()->back()->with('message','store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
