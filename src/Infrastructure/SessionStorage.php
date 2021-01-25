<?php

namespace Laracon\DependencyInjection\Infrastructure;

class SessionStorage 
{
  public function __construct()
  {
    session_start();
  }

  public function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public function get($key)
  {
    return $_SESSION[$key];
  }
}