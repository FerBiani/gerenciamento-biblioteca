<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('documento', function(Blueprint $table)
		{
			$table->foreign('cliente_id', 'fk_documento_cliente_id')->references('id')->on('cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('documento', function(Blueprint $table)
		{
			$table->dropForeign('fk_documento_cliente_id');
		});
	}

}
