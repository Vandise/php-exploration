<?php

namespace Amber\System\Factory;

class Command
{
  public static function create($cmd, $opts)
  {
    $class = "\\Amber\\System\\Command\\".$cmd;
    return new $class($opts);
  }
}