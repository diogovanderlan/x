<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Auth;
use App\Models\Pergunta;


class PerguntaController extends Controlle
{

    public function __construct()
    {
      session_start();
      if(!isset($_SESSION['id'])){
        header("Location: /login");
        die();
      }
    }

    public function listarPergunta(ServerRequestInterface $request, ResponseInterface $response)
    {
        //listar todas perguntas 
        $modelo = Pergunta::all();

        $this->modelo = $modelo;
        print_r($response);exit;
        return $response;
    }

    public function editarPergunta(ServerRequestInterface $request, ResponseInterface $response)
    {

    }

    public function deletearPergunta(ServerRequestInterface $request, ResponseInterface $response)
    {

    }

    public function perguntar(ServerRequestInterface $request, ResponseInterface $response)
    {

    }
    
}