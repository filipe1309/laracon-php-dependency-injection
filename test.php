<?php

require 'vendor/autoload.php';

use Laracon\DependencyInjection\Application\Helper\Logger;
use Laracon\DependencyInjection\Domain\User;
use Laracon\DependencyInjection\Infrastructure\SessionStorage;

$logger = new Logger();
$storage = new SessionStorage($logger);
$user = new User($storage);
$user->setLanguage('pt-BR');
echo PHP_EOL . 'Language: ' .  $user->getLanguage() . PHP_EOL;
// Language: pt-BR

echo PHP_EOL;