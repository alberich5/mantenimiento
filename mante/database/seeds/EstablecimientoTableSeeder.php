<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class EstablecimientoTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		for ($i=0; $i < 30 ; $i++) { 
			\DB::table('establecimiento')->insert(array(
				'ID' => '1/'.$i,
				'CveEst' => $i,
				'Nombre' => $faker->unique()->state,
				'Cve_Local' => '1',
				'Categoria' => '5',
				'CuartosReg' => '1'.$i,
				'status' => '1'
			));
		}

		for ($i=0; $i < 30 ; $i++) { 
			\DB::table('establecimiento')->insert(array(
				'ID' => '2/'.$i,
				'CveEst' => $i,
				'Nombre' => $faker->state,
				'Cve_Local' => '2',
				'Categoria' => '4',
				'CuartosReg' => '1'.$i,
				'status' => '1'
			));
		}
		for ($i=0; $i < 30 ; $i++) { 
			\DB::table('establecimiento')->insert(array(
				'ID' => '3/'.$i,
				'CveEst' => $i,
				'Nombre' => $faker->state,
				'Cve_Local' => '3',
				'Categoria' => '3',
				'CuartosReg' => '1'.$i,
				'status' => '1'
			));
		}
		

	}

}