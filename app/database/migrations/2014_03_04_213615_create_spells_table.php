<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spells', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 34)->nullable();
			$table->string('school', 14)->nullable();
			$table->string('subschool', 23)->nullable();
			$table->string('descriptor', 49)->nullable();
			$table->string('spell_level', 121)->nullable();
			$table->string('casting_time', 47)->nullable();
			$table->text('components')->nullable();
			$table->boolean('costly_components', 1)->nullable();
			$table->string('range', 51)->nullable();
			$table->string('area', 94)->nullable();
			$table->string('effect', 156)->nullable();
			$table->string('targets', 185)->nullable();
			$table->string('duration', 81)->nullable();
			$table->boolean('dismissible', 1)->nullable();
			$table->boolean('shapeable', 1)->nullable();
			$table->string('saving_throw', 72)->nullable();
			$table->string('spell_resistence', 40)->nullable();
			$table->text('description')->nullable();
			$table->text('description_formatted')->nullable();
			$table->string('source', 30)->nullable();
			$table->text('full_text')->nullable();
			$table->boolean('verbal', 1)->nullable();
			$table->boolean('somatic', 1)->nullable();
			$table->boolean('material', 1)->nullable();
			$table->boolean('focus', 1)->nullable();
			$table->boolean('divine_focus', 1)->nullable();
			$table->string('sor', 4)->nullable();
			$table->string('wiz', 4)->nullable();
			$table->string('cleric', 4)->nullable();
			$table->string('druid', 4)->nullable();
			$table->string('ranger', 4)->nullable();
			$table->string('bard', 4)->nullable();
			$table->string('paladin', 4)->nullable();
			$table->string('alchemist', 4)->nullable();
			$table->string('summoner', 4)->nullable();
			$table->string('witch', 4)->nullable();
			$table->string('inquisitor', 4)->nullable();
			$table->string('oracle', 4)->nullable();
			$table->string('antipaladin', 4)->nullable();
			$table->string('magus', 4)->nullable();
			$table->string('adept', 4)->nullable();
			$table->string('deity', 14)->nullable();
			$table->string('sla_level', 4)->nullable();
			$table->string('domain', 41)->nullable();
			$table->string('short_description', 149)->nullable();
			$table->boolean('acid', 1)->nullable();
			$table->boolean('air', 1)->nullable();
			$table->boolean('chaotic', 1)->nullable();
			$table->boolean('cold', 1)->nullable();
			$table->boolean('curse', 1)->nullable();
			$table->boolean('darkness', 1)->nullable();
			$table->boolean('death', 1)->nullable();
			$table->boolean('disease', 1)->nullable();
			$table->boolean('earth', 1)->nullable();
			$table->boolean('electricity', 1)->nullable();
			$table->boolean('emotion', 1)->nullable();
			$table->boolean('evil', 1)->nullable();
			$table->boolean('fear', 1)->nullable();
			$table->boolean('fire', 1)->nullable();
			$table->boolean('force', 1)->nullable();
			$table->boolean('good', 1)->nullable();
			$table->boolean('language_dependent', 1)->nullable();
			$table->boolean('lawful', 1)->nullable();
			$table->boolean('light', 1)->nullable();
			$table->boolean('mind_affecting', 1)->nullable();
			$table->boolean('pain', 1)->nullable();
			$table->boolean('poison', 1)->nullable();
			$table->boolean('shadow', 1)->nullable();
			$table->boolean('sonic', 1)->nullable();
			$table->boolean('water', 1)->nullable();
			$table->string('linktext', 101)->nullable();
			$table->string('material_costs', 5)->nullable();
			$table->string('bloodline', 49)->nullable();
			$table->string('patron', 36)->nullable();
			$table->text('mythic_text')->nullable();
			$table->text('augmented')->nullable();
			$table->boolean('mythic', 1)->nullable();
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
		Schema::drop('spells');
	}

}
