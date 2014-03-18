<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feats', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 34)->nullable();
			$table->string('type', 15)->nullable();
			$table->text('description')->nullable();
			$table->text('prerequisites')->nullable();
			$table->string('prerequisite_feats', 114)->nullable();
			$table->text('benefit')->nullable();
			$table->text('normal')->nullable();
			$table->text('special')->nullable();
			$table->string('source', 27)->nullable();
			$table->text('fulltext')->nullable();
			$table->boolean('teamwork', 1)->nullable();
			$table->boolean('critical', 1)->nullable();
			$table->boolean('grit', 1)->nullable();
			$table->boolean('style', 1)->nullable();
			$table->boolean('performance', 1)->nullable();
			$table->boolean('racial', 1)->nullable();
			$table->boolean('companion_familiar', 1)->nullable();
			$table->string('race_name', 28)->nullable();
			$table->text('note')->nullable();
			$table->text('goal')->nullable();
			$table->text('completion_benefit')->nullable();
			$table->boolean('multiples', 1)->nullable();
			$table->string('suggested_traits', 59)->nullable();
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
		Schema::drop('feats');
	}

}
