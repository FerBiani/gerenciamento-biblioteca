<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmprestimoHasLivroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emprestimo_has_livro', function(Blueprint $table)
		{
			$table->integer('emprestimo_id')->unsigned();
			$table->integer('livro_id')->unsigned()->index('fk_cliente_has_livro_livro_id_idx');
			$table->primary(['emprestimo_id','livro_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emprestimo_has_livro');
	}

}
