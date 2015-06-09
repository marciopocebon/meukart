<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->char('tipo', 1);
			$table->string('nome', 120);
			$table->string('email')->unique();
			$table->string('senha', 60);
			$table->string('telefone', 20)->nullable();
			$table->string('cpf', 11)->nullable();
			$table->rememberToken();
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
		Schema::drop('usuarios');
	}

}
