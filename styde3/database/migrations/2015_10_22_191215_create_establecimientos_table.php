<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration {

	
	public function up()
	{
		Schema::create('establecimiento', function(Blueprint $table)
		{
			$table->string('ID',20)->primary();
			$table->integer('CveEst')->increments();
			$table->string('Nombre',50);
			$table->integer('Cve_Local')->unsigned();
			$table->tinyInteger('Categoria');
			$table->integer('CuartosReg');
			$table->boolean('status');
			//Clave ajena
			
			$table->foreign('Cve_Local')
					->references('Cve_Local')->on('localidad')
					->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('establecimiento');
	}

}
