<?php

require '../autoload.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\AuthController;
use App\Controllers\HomeController;

$app = new App([

    'settings' => [
        'displayErrorDetails' => true,
        'debug'               => true,
    ]

]);

#Rotas de login
$app->get('/login', AuthController::class . ':index');
$app->post('/login', AuthController::class . ':entrar');
$app->get('/logout', AuthController::class . ':sair');

#Rota home apos fazer o login
$app->get('/home', HomeController::class . ':index');

$app->run();