<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonstersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monsters', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 33)->nullable();
			$table->string('cr', 5)->nullable();
			$table->integer('xp')->nullable();
			$table->string('race', 27)->nullable();
			$table->string('class', 26)->nullable();
			$table->string('monster_source', 33)->nullable();
			$table->string('alignment', 31)->nullable();
			$table->string('size', 10)->nullable();
			$table->string('type', 49)->nullable();
			$table->string('subtype', 50)->nullable();
			$table->string('ac', 93)->nullable();
			$table->integer('hp')->nullable();
			$table->string('hd', 28)->nullable();
			$table->string('saves', 103)->nullable();
			$table->string('fort', 32)->nullable();
			$table->string('ref', 18)->nullable();
			$table->string('will', 46)->nullable();
			$table->string('speed', 66)->nullable();
			$table->text('melee')->nullable();
			$table->string('ranged', 93)->nullable();
			$table->string('space', 14)->nullable();
			$table->string('reach', 47)->nullable();
			$table->string('ability_scores', 46)->nullable();
			$table->text('feats')->nullable();
			$table->text('skills')->nullable();
			$table->text('racial_mods')->nullable();
			$table->text('languages')->nullable();
			$table->text('sq')->nullable();
			$table->string('environment', 107)->nullable();
			$table->text('organization')->nullable();
			$table->text('treasure')->nullable();
			$table->string('group', 23)->nullable();
			$table->string('source', 30)->nullable();
			$table->boolean('is_template', 1)->nullable();
			$table->text('fulltext')->nullable();
			$table->string('gear', 172)->nullable();
			$table->string('other_gear', 118)->nullable();
			$table->boolean('character_flag', 1)->nullable();
			$table->boolean('companion_flag', 1)->nullable();
			$table->boolean('fly', 1)->nullable();
			$table->boolean('climb', 1)->nullable();
			$table->boolean('burrow', 1)->nullable();
			$table->boolean('swim', 1)->nullable();
			$table->boolean('land', 1)->nullable();
			$table->string('templates_applied', 22)->nullable();
			$table->string('age_category', 5)->nullable();
			$table->boolean('dont_use_racial_hd', 1)->nullable();
			$table->string('variant_parent', 6)->nullable();
			$table->string('class_archetypes', 14)->nullable();
			$table->string('companion_familiar_link', 4)->nullable();
			$table->string('alternate_name_form', 24)->nullable();
			$table->boolean('unique_monster', 1)->nullable();
			$table->integer('mr')->nullable();
			$table->boolean('mythic', 1)->nullable();
			$table->boolean('mt', 1)->nullable();
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
		Schema::drop('monsters');
	}

}
