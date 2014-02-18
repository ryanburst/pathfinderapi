<?php

class MagicItemTableSeeder extends BaseTableSeeder {

  public function __construct()
  {
    $this->table_name = 'magic_items';
    $this->file = 'magic_items.json';
    $this->model = 'MagicItem';
  }
}