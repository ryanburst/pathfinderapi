<?php

class NPCsApiTest extends TestCase {

  /**
   ************************************************************************
   * Basic Route Tests
   * notice that we can use our route() helper here!
   ************************************************************************
   */

  //test that GET /api/v1/npcs returns HTTP 200
  public function testIndex()
  {
    $response = $this->call('GET', route('api.v1.npcs.index') );
    $this->assertTrue($response->isOk());
  }

  //test that GET /api/v1/npcs/1 returns HTTP 200
  public function testShow()
  {
    $response = $this->call('GET', route('api.v1.npcs.show', array(1)) );
    $this->assertTrue($response->isOk());
  }
}