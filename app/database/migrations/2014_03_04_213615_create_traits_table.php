<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTraitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('traits', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 37)->nullable();
			$table->string('type', 28)->nullable();
			$table->string('category', 28)->nullable();
			$table->string('prerequisite', 58)->nullable();
			$table->string('pfs_legal', 7)->nullable();
			$table->text('description')->nullable();
			$table->string('source', 19)->nullable();
			$table->string('version', 5)->nullable();
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
		Schema::drop('traits');
	}

}
