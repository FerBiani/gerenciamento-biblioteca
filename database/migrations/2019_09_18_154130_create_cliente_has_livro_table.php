<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClienteHasLivroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cliente_has_livro', function(Blueprint $table)
		{
			$table->integer('cliente_id')->unsigned();
			$table->integer('livro_id')->unsigned()->index('fk_cliente_has_livro_livro_id_idx');
			$table->date('data_emprestimo');
			$table->date('data_devolucao');
			$table->primary(['cliente_id','livro_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cliente_has_livro');
	}

}
