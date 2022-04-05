<?php

require '../autoload.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\PerguntaController;

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
$app->get('/homeUsu', HomeController::class . ':homeUsu');
$app->get('/homeEsp', HomeController::class . ':homeEsp');
$app->get('/homeAdm', HomeController::class . ':homeAdm');

#Rotas perguntas
$app->get('/pergunta', PerguntaController::class . ':listarPergunta');
$app->post('/pergunta', PerguntaController::class . ':perguntar');
$app->put('/pergunta', PerguntaController::class . ':editarPergunta');
$app->delete('/pergunta', PerguntaController::class . ':deletarPerguntar');


$app->run();