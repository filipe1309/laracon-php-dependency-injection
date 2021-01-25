<?php

require 'vendor/autoload.php';

use Laracon\DependencyInjection\Domain\User;
use Laracon\DependencyInjection\Infrastructure\SessionStorage;

$storage = new SessionStorage();
$user = new User($storage);
$user->setLanguage('pt-BR');
echo PHP_EOL . 'Language: ' .  $user->getLanguage() . PHP_EOL;
// Language: pt-BR

echo PHP_EOL;

// var_dump($_SESSION, $_SESSION['language']);