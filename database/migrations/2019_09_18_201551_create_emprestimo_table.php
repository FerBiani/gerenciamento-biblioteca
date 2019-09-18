<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmprestimoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emprestimo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('data_emprestimo');
			$table->date('data_devolucao');
			$table->integer('cliente_id')->unsigned()->index('fk_emprestimo_cliente_id_idx');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emprestimo');
	}

}
