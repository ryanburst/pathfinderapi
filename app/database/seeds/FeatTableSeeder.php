<?php

class FeatTableSeeder extends BaseTableSeeder {

  public function __construct()
  {
    $this->table_name = 'feats';
    $this->file = 'feats.json';
    $this->model = 'Feat';
  }
}