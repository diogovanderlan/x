<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Auth;

class AuthController extends Controlle
{

  public function index(ServerRequestInterface $request, ResponseInterface $response)
  {

    return $this->view('auth/login',$response);
  }

  public function entrar(ServerRequestInterface $request, ResponseInterface $response)
  {

    $dados = $request->getParsedBody();
    //print_r($dados);exit;
    if(Auth::login($dados['email'],$dados['senha'])){
      //Logado
      $tipo = $_SESSION['tipo'];

      if($tipo == 'usu') {
        return $response->withRedirect('/homeUsu');
      }

      if($tipo == 'adm') {
        return $response->withRedirect('/homeAdm');
      }

      if($tipo == 'esp') {
        return $response->withRedirect('/homeEsp');
      }
     
    }else{
      //não está logado
      return $response->withRedirect('/login');
    }

  }

  public function sair(ServerRequestInterface $request, ResponseInterface $response)
  {
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);

    return $response->withRedirect('/login');

  }

}