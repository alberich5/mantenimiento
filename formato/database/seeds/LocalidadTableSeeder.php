<?php



use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Localidad;

class LocalidadTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Localidad::create([
			'nom_local' => 'Cd. De Oaxaca',
			'Folio' => '78'
			]);
		Localidad::create([
			'nom_local' => 'Bahías de Huatulco',
			'Folio' => '39'
			]);
		Localidad::create([
			'nom_local' => 'Puerto Escondido',
			'Folio' => '28'
			]);
		Localidad::create([
			'nom_local' => 'Istmo',
			'Folio' => '32'
			]);
		Localidad::create([
			'nom_local' => 'Tuxtepec',
			'Folio' => '17'
			]);
		Localidad::create([
			'nom_local' => 'Juquila',
			'Folio' => '0'
			]);
		Localidad::create([
			'nom_local' => 'Mixteca',
			'Folio' => '0'
			]);
		

	}

}