<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpcsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('npcs', function(Blueprint $table) {
			$table->increments('id');
			$table->text('name')->nullable();
			$table->string('cr', 5)->nullable();
			$table->string('xp', 7)->nullable();
			$table->string('race', 40)->nullable();
			$table->string('class', 75)->nullable();
			$table->string('monster_source', 164)->nullable();
			$table->string('alignment', 2)->nullable();
			$table->string('size', 10)->nullable();
			$table->string('type', 18)->nullable();
			$table->string('subtype', 56)->nullable();
			$table->string('init', 26)->nullable();
			$table->string('senses', 125)->nullable();
			$table->string('aura', 98)->nullable();
			$table->string('ac', 28)->nullable();
			$table->string('ac_mods', 100)->nullable();
			$table->string('hp', 17)->nullable();
			$table->string('hd', 43)->nullable();
			$table->string('hp_mods', 57)->nullable();
			$table->string('saves', 156)->nullable();
			$table->integer('fort')->nullable();
			$table->string('ref', 19)->nullable();
			$table->string('will', 43)->nullable();
			$table->string('save_mods', 127)->nullable();
			$table->string('defensive_abilities', 163)->nullable();
			$table->string('dr', 50)->nullable();
			$table->string('immune', 141)->nullable();
			$table->string('resist', 62)->nullable();
			$table->string('sr', 31)->nullable();
			$table->string('weaknesses', 69)->nullable();
			$table->string('speed', 56)->nullable();
			$table->string('speed_mod', 61)->nullable();
			$table->string('melee', 283)->nullable();
			$table->string('ranged', 150)->nullable();
			$table->string('space', 9)->nullable();
			$table->string('reach', 45)->nullable();
			$table->text('special_attacks')->nullable();
			$table->text('spell_like_abilities')->nullable();
			$table->text('spells_known')->nullable();
			$table->text('spells_prepared')->nullable();
			$table->string('spell_domains', 65)->nullable();
			$table->string('ability_scores', 58)->nullable();
			$table->string('ability_score_mods', 1)->nullable();
			$table->integer('base_atk')->nullable();
			$table->string('cmb', 53)->nullable();
			$table->string('cmd', 58)->nullable();
			$table->text('feats')->nullable();
			$table->text('skills')->nullable();
			$table->string('racial_mods', 138)->nullable();
			$table->string('languages', 207)->nullable();
			$table->text('sq')->nullable();
			$table->string('environment', 1)->nullable();
			$table->string('organization', 1)->nullable();
			$table->string('treasure', 1)->nullable();
			$table->string('description_visual', 1)->nullable();
			$table->string('group', 4)->nullable();
			$table->string('source', 37)->nullable();
			$table->boolean('is_template', 1)->nullable();
			$table->text('special_abilities')->nullable();
			$table->string('description', 1)->nullable();
			$table->text('fulltext')->nullable();
			$table->string('gender', 15)->nullable();
			$table->string('bloodline', 30)->nullable();
			$table->string('prohibited_schools', 26)->nullable();
			$table->text('before_combat')->nullable();
			$table->text('during_combat')->nullable();
			$table->text('morale')->nullable();
			$table->text('gear')->nullable();
			$table->text('other_gear')->nullable();
			$table->string('vulnerability', 4)->nullable();
			$table->string('note', 181)->nullable();
			$table->boolean('character_flag', 1)->nullable();
			$table->boolean('companion_flag', 1)->nullable();
			$table->boolean('fly', 1)->nullable();
			$table->boolean('climb', 1)->nullable();
			$table->boolean('burrow', 1)->nullable();
			$table->boolean('swim', 1)->nullable();
			$table->boolean('land', 1)->nullable();
			$table->string('templates_applied', 29)->nullable();
			$table->string('offense_note', 99)->nullable();
			$table->text('base_statistics')->nullable();
			$table->text('extracts_prepared')->nullable();
			$table->string('age_category', 12)->nullable();
			$table->string('mystery', 20)->nullable();
			$table->string('class_archetypes', 27)->nullable();
			$table->string('patron', 18)->nullable();
			$table->string('companion_familiar_link', 4)->nullable();
			$table->string('focused_school', 7)->nullable();
			$table->string('traits', 66)->nullable();
			$table->string('alternate_name_form', 11)->nullable();
			$table->string('linktext', 1)->nullable();
			$table->boolean('unique_monster', 1)->nullable();
			$table->string('thassilonian_specialization', 14)->nullable();
			$table->boolean('variant', 1)->nullable();
			$table->integer('mr')->nullable();
			$table->boolean('mythic', 1)->nullable();
			$table->integer('mt')->nullable();
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
		Schema::drop('npcs');
	}

}
