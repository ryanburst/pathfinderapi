<?php

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    if (App::environment() === 'production')
    {
      exit('You almost just nuked production and seeded it with crap data. Dummy.');
    }

    Eloquent::unguard();

    $this->call('SpellTableSeeder');
    $this->call('FeatTableSeeder');
    $this->call('MagicItemTableSeeder');
    $this->call('MonsterTableSeeder');
    $this->call('NPCTableSeeder');
    $this->call('TraitTableSeeder');
    $this->call('UsersTableSeeder');
  }

}