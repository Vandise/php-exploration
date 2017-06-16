<?php

namespace Amber\Framework\Test;
use PHPUnit\Framework\TestCase;

class ResiniteTest extends TestCase
{
  protected $resinite;

  protected function setUp()
  {
    parent::setUp();
    $this->resinite = \Amber\Framework\Resinite::getInstance();
  }

  public function testDataProperty()
  {
    $this->resinite->router = "yes";
    $this->assertEquals($this->resinite->router, "yes",
      "Failed to assign Resinite data attribute"
    );
  }

}