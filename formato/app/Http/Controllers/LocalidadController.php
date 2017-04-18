<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Localidad;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;


class LocalidadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$local = Localidad::All();
		return view('consulta.localidad',compact('local'));
	}



	public function create()
	{
		return view('captura.localidades');
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
			'folio' => 'required'
			);

		$this->validate($request, $rules);
		
		Localidad::create([
		 	'nom_local' => $request['name'], 
		 	'Folio' => $request['folio'],
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
		Excel::create('MI PRIMERA', function($excel)
		{

			$excel->sheet('Sheetname', function($sheet){
				$data=[];
				array_push($data, array('omar','zarate','hipolito'));
				$sheet->fromArray($data,null,'A1', false, false);
			});

		})->download('xlsx');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$local = Localidad::where('Cve_Local',$id)->get();

		return view('editar.localidad',compact($local));
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
