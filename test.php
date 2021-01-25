<?php

require 'vendor/autoload.php';

use Laracon\DependencyInjection\Domain\User;
use Laracon\DependencyInjection\Infrastructure\SessionStorage;

$user = new User(new SessionStorage());
$user->setLanguage('pt-BR');
echo PHP_EOL . 'Language: ' .  $user->getLanguage() . PHP_EOL;
echo PHP_EOL;

// var_dump($_SESSION, $_SESSION['language']);