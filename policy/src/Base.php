<?php

namespace Amber\Policy;

abstract class Base
{

  protected $resolved;
  protected $rejectionResolver;

  public function __construct($rejectionResolver)
  {
    $this->rejectionResolver = $rejectionResolver;
    if(!(method_exists($this, 'resolve')))
    {
      throw new \Amber\Policy\Exception\NoResolveMethod('Class '.get_class($this).' must implement a "resolve" method.');
    }
  }

  public function getResolvedStatus()
  {
    return $this->resolved;
  }

}