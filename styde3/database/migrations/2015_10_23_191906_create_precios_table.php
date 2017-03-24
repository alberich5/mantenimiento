<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('precio', function(Blueprint $table)
		{
			$table->increments('id_precio');
			$table->date('fecha');
			$table->double('cuadruple', 15, 8);
			$table->double('triple', 15, 8);
			$table->double('doble', 15, 8);
			$table->double('sencilla', 15, 8);

			//Clave ajena
			//$table->integer('id_establec')->unsigned();
			//$table->foreign('id_establec')
			//		->references('id_establec')->on('establecimiento')
			//		->onDelete('cascade');
			//$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('precio');
	}

}
