<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Auth;

class HomeController extends Controlle
{

  private $tipoUsuario;

  public function __construct()
  {
    session_start();
    if(!isset($_SESSION['id'])){
      header("Location: /login");
      die();
    }
    $this->tipoUsuario = $_SESSION['tipo'];
  }

  public function homeUsu(ServerRequestInterface $request, ResponseInterface $response)
  {
    if($this->tipoUsuario == 'usu'){
      return $this->view('home/homeUsu',$response);
    }
     return $this->view('home/home'.$this->tipoUsuario,$response);
  }

  public function homeAdm(ServerRequestInterface $request, ResponseInterface $response)
  {
    if($this->tipoUsuario == 'adm'){
      return $this->view('home/homeAdm',$response);
    }
     return $this->view('home/home'.$this->tipoUsuario,$response);
  }

  public function homeEsp(ServerRequestInterface $request, ResponseInterface $response)
  {
    if($this->tipoUsuario == 'esp'){
      return $this->view('home/homeEsp',$response);
    }
     return $this->view('home/home'.$this->tipoUsuario,$response);
  }

}