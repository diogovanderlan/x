<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Auth;

class HomeController extends Controlle
{

    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
      return $this->view('home/index',$response);
    }



}