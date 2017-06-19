<?php

namespace Amber\Service;

abstract class Base
{
  public function __construct($routeParams)
  {
    $this->params = $routeParams;
  }

  abstract public function execute();

}