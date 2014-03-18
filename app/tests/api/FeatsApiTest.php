<?php

class FeatApiTest extends TestCase {

  /**
   ************************************************************************
   * Basic Route Tests
   * notice that we can use our route() helper here!
   ************************************************************************
   */

  //test that GET /api/v1/feats returns HTTP 200
  public function testIndex()
  {
    $response = $this->call('GET', route('api.v1.feats.index') );
    $this->assertTrue($response->isOk());
  }

  //test that GET /api/v1/feats/1 returns HTTP 200
  public function testShow()
  {
    $response = $this->call('GET', route('api.v1.feats.show', array(1)) );
    $this->assertTrue($response->isOk());
  }
}