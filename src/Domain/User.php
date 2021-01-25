<?php

namespace Laracon\DependencyInjection\Domain;

use Laracon\DependencyInjection\Infrastructure\SessionStorage;

class User
{
  protected $storage;

  function __construct(SessionStorage $storage)
  {
    $this->storage = $storage;
  }

  function setLanguage($language)
  {
    $this->storage->set('language', $language);
  }

  function getLanguage()
  {
    return $this->storage->get('language');
  }
}