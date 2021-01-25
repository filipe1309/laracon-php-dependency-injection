<?php

namespace Laracon\DependencyInjection\Application\Helper;

class Logger
{
  public function log($message)
  {
    echo "Logging $message to the database";
  }
}