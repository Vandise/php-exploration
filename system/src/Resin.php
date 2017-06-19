<?php

namespace Amber\System;

class Resin
{

  public function __invoke($app, $args)
  {    
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