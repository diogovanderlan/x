<?php

require '../autoload.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\AuthController;

$app = new App([

    'settings' => [
        'displayErrorDetails' => true,
        'debug'               => true,
    ]

]);


$app->get('/login', AuthController::class . ':index');
$app->post('/login', AuthController::class . ':entrar');
$app->get('/logout', AuthController::class . ':sair');

$app->run();