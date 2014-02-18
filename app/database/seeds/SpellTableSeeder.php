<?php

class SpellTableSeeder extends BaseTableSeeder {

  public function __construct()
  {
    $this->table_name = 'spells';
    $this->file = 'spells.json';
    $this->model = 'Spell';
  }
}