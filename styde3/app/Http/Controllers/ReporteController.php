<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReporteController extends Controller {

	
	public function index()
	{
		return view('captura.reporte');
	}

	

	
	public function create(Request $request)
	{
		
		$num = $request->get('local');
		return redirect( asset('/archivos/R-'.$num.'.xlsx'));

	}

	
	public function store(Request $request)
	{
		
	}


	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}


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
