<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClienteHasLivroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cliente_has_livro', function(Blueprint $table)
		{
			$table->foreign('cliente_id', 'fk_cliente_has_livro_cliente_id')->references('id')->on('cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('livro_id', 'fk_cliente_has_livro_livro_id')->references('id')->on('livro')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cliente_has_livro', function(Blueprint $table)
		{
			$table->dropForeign('fk_cliente_has_livro_cliente_id');
			$table->dropForeign('fk_cliente_has_livro_livro_id');
		});
	}

}
