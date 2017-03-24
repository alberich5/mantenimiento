<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Establecimiento;
use App\Localidad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EstablecimientoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	
		$estable = Establecimiento::name($request->get('local'))->get();
		
		return view('consulta.establecimiento',compact('estable'));
	}

	

	
	public function create(Request $request)
	{
		$local = Localidad::All();
		return view('captura.establecimiento',compact('local'));
		
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$rules = array(
			'name' => 'required',
			'cate' => 'required',
			'cuartos' => 'required',
			'status' => 'required',
			'local' => 'required'
			);

		$this->validate($request, $rules);
		
		$id = $request['local'].'/';

		Establecimiento::create([
			'ID' => $id, 
		 	'Nombre' => $request['name'], 
		 	'Cve_Local' => $request['local'],
		 	'Categoria' => $request['cate'],
		 	'CuartosReg' => $request['cuartos'],
		 	'status' => $request['status'],
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

	public function mostrar()
	{
		return "dentro";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		
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

	
	public function destroy($id)
	{
		//
	}

}
