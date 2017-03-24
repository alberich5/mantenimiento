<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcupacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ocupacion', function(Blueprint $table)
		{
			$table->bigIncrements('id_ocup');
			$table->string('id_est');
			$table->date('Fecha');
			$table->integer('CtosDisp');
			$table->integer('CtosOcup');
			//clave foranea
			$table->foreign('id_est')
					->references('ID')->on('establecimiento');
					
			$table->timestamps();
		});
	}

	
	public function down()
	{
		Schema::drop('ocupacion');
	}

}
