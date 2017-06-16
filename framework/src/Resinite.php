<?php

namespace Amber\Framework;

/**
 * Resinite
 *
 * Singleton Instance containing key framework configurations and classes
 *
 * @author Benjamin J. Anderson <andeb2804@gmail.com>
 * @package Amber
 * @since Nov 4th, 2015
 * @version v0.1.0
 */
class Resinite
{
  protected static $instance = null;
  protected $data = array();

  private function __construct(){}

  public static function getInstance()
  {
    if (!isset(static::$instance))
    {
      static::$instance = new static;
    }
    return static::$instance;
  }

  public function __set($name, $value)
  {
    static::$instance->data[$name] = $value;
  }

  public function __get($name)
  {
    return static::$instance->data[$name];
  }
}