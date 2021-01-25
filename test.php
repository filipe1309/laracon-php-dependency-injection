<?php

require 'vendor/autoload.php';

use Laracon\DependencyInjection\Domain\User;

$user = new User();
$user->setLanguage('pt-BR');
echo PHP_EOL . 'Language: ' .  $user->getLanguage() . PHP_EOL;
echo PHP_EOL;

// var_dump($_SESSION, $_SESSION['language']);