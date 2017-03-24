<?php



use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
				'name' => 'Admin',
				'email' => 'admin@gmail.com',
				'password' => bcrypt('administrador')
			]
			);
		User::create([
				'name' => 'Prueba usuario',
				'email' => 'prueba@hotmail.com',
				'password' => bcrypt('12345678')
			]
			);

	}

}