<?php

require 'vendor/autoload.php';

use Laracon\DependencyInjection\Application\Helper\Logger;
use Laracon\DependencyInjection\Config\Container;
use Laracon\DependencyInjection\Domain\User;
use Laracon\DependencyInjection\Infrastructure\SessionStorage;

$container = new Container();

$container->set(User::class, function (Container $c) {
  return new User($c->get(SessionStorage::class));
});

$container->set(SessionStorage::class, function (Container $c) {
  return new SessionStorage($c->get(Logger::class));
});

$container->set(Logger::class, function (Container $c) {
  return new Logger();
});

$user = $container->get(User::class);
$user->setLanguage('pt-BR');
echo PHP_EOL . 'Language: ' .  $user->getLanguage() . PHP_EOL;
// Language: pt-BR

echo PHP_EOL;