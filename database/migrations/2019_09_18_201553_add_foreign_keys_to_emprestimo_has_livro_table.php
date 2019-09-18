<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmprestimoHasLivroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('emprestimo_has_livro', function(Blueprint $table)
		{
			$table->foreign('emprestimo_id', 'fk_emprestimo_has_livro')->references('id')->on('emprestimo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('livro_id', 'fk_emprestimo_has_livro_livro_id')->references('id')->on('livro')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('emprestimo_has_livro', function(Blueprint $table)
		{
			$table->dropForeign('fk_emprestimo_has_livro');
			$table->dropForeign('fk_emprestimo_has_livro_livro_id');
		});
	}

}
