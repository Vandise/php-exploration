<?php

namespace Amber\System\Command;

class Server extends Base
{

  protected function setOptions()
  {
    $this->options->add('help', 'View server command options');
    $this->options->add('h|host?', 'Server IP to run on.')
      ->isa('String')
      ->defaultValue('127.0.0.1');
    $this->options->add('p|port?', 'Server port to run on.')
      ->isa('Number')
      ->defaultValue(8080);
    $this->options->add('d|directory?', 'Directory containing the root of your application (index.php)')
      ->isa('String')
      ->defaultValue('public_html/');
    $this->options->add('s|script?', 'Server script handling asset and script requests.')
      ->isa('String')
      ->defaultValue(AMBER_ROOT_PATH.'/scripts/dev_server');
    $this->options->add('e|environment?', 'Server environment (development, production, test).')
      ->isa('String')
      ->defaultValue('development');
  }

  public function execute()
  {
    try
    {
      $options = $this->parser->parse($this->received_options);
      if ($options->help)
      {
        $this->defaultAction();          
      }
      else
      {
        $command = "AMBER_ENVIRONMENT=".$options->environment." php -S ".$options->host.":".$options->port." -t ".$options->directory." ".$options->script;
        echo "\n\n Booting up server: ".$command."\n\n";
        echo shell_exec($command);
      }
    }
    catch ( \Exception $e )
    {
      echo $e->getMessage();
    }
  }

}