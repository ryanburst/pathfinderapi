<?php

class TraitTableSeeder extends BaseTableSeeder {

  public function __construct()
  {
    $this->table_name = 'traits';
    $this->file = 'traits.json';
    $this->model = 'Trait';
  }
}