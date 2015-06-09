<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anuncios', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->integer('id_usuario');
			$table->integer('id_motor')->nullable();
			$table->integer('id_chassi')->nullable();
			$table->string('titulo', 150);
			$table->text('descricao');
			$table->decimal('valor', 15, 2);
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('id_usuario')->references('id')->on('usuarios');
			$table->foreign('id_motor')->references('id')->on('anuncio_motor');
			$table->foreign('id_chassi')->references('id')->on('anuncio_chassi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anuncios');
	}

}
