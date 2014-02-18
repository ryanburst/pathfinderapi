<?php

class BaseTableSeeder extends Seeder {
  /**
   * Database table used for seeding
   *
   * @var string
   */
  protected $table_name;

  /**
   * File used for seeding data
   *
   * @var string
   */
  protected $file;

  /**
   * Model used for seeding
   *
   * @var string
   */
  protected $model;

  /**
   * Truncate table before seeding data
   *
   * @var boolean
   */
  protected $truncate_table = true;

  protected function seed_file_path()
  {
    return app_path() . '/database/source/json/' . $this->file;
  }

  protected function create_statement()
  {
    return FALSE;
  }

  public function run()
  {
    if( $this->truncate_table )
    {
      DB::table($this->table_name)->truncate();
    }

    //Read seed file and insert each row
    if( $rows = file_get_contents($this->seed_file_path()) )
    {
      $rows = json_decode($rows);
      foreach( $rows as $row )
      {
        $row = (array)$row;
        $model = $this->model;
        $model::create($row);
      }
      return TRUE;
    }
    $this->command->info('Could not load ' . $this->file);
    return FALSE;
  }
}