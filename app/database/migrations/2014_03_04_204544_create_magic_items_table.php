<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMagicItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('magic_items', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 46)->nullable();
			$table->string('aura', 64)->nullable();
			$table->string('cl', 6)->nullable();
			$table->string('slot', 24)->nullable();
			$table->string('price', 45)->nullable();
			$table->string('weight', 42)->nullable();
			$table->text('description')->nullable();
			$table->text('requirements')->nullable();
			$table->string('cost', 102)->nullable();
			$table->string('group', 16)->nullable();
			$table->string('source', 30)->nullable();
			$table->string('al', 28)->nullable();
			$table->integer('int')->nullable();
			$table->string('wis', 17)->nullable();
			$table->integer('cha')->nullable();
			$table->string('ego', 29)->nullable();
			$table->string('communication', 45)->nullable();
			$table->string('senses', 58)->nullable();
			$table->text('powers')->nullable();
			$table->string('magic_items', 178)->nullable();
			$table->text('fulltext')->nullable();
			$table->text('destruction')->nullable();
			$table->boolean('minor_artifact_flag', 1)->nullable();
			$table->boolean('major_artifact_flag', 1)->nullable();
			$table->boolean('abjuration', 1)->nullable();
			$table->boolean('conjuration', 1)->nullable();
			$table->boolean('divination', 1)->nullable();
			$table->boolean('enchantment', 1)->nullable();
			$table->boolean('evocation', 1)->nullable();
			$table->boolean('necromancy', 1)->nullable();
			$table->boolean('transmutation', 1)->nullable();
			$table->string('aura_strength', 8)->nullable();
			$table->string('weight_value', 5)->nullable();
			$table->integer('price_value')->nullable();
			$table->integer('cost_value')->nullable();
			$table->string('languages', 44)->nullable();
			$table->string('base_item', 101)->nullable();
			$table->string('linktext', 87)->nullable();
			$table->boolean('mythic', 1)->nullable();
			$table->boolean('legendary_weapon', 1)->nullable();
			$table->boolean('illusion', 1)->nullable();
			$table->boolean('universal', 1)->nullable();
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
		Schema::drop('magic_items');
	}

}
