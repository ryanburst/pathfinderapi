<?php

class MonsterTableSeeder extends BaseTableSeeder {

  public function __construct()
  {
    $this->table_name = 'monsters';
    $this->file = 'monsters.json';
    $this->model = 'Monster';
  }
}