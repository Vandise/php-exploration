<?php

namespace Amber\System;

class Resin
{

  public function __invoke($argv, $args)
  {
    $args = $argv;
    $app = $args[1];
    array_splice($args, 1, 1);
    
    try
    {
      $cmd = \Amber\System\Factory\Command::create($app, $args);
      $cmd->execute();
    }
    catch (Exception $e)
    {
      echo $e->getMessage()."\n\n";
    }
  }

}