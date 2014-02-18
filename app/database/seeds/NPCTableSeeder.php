<?php

class NPCTableSeeder extends BaseTableSeeder {

  public function __construct()
  {
    $this->table_name = 'npcs';
    $this->file = 'npcs.json';
    $this->model = 'NPC';
  }
}