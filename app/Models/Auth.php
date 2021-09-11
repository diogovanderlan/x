<?php
namespace App\Models;

class Auth extends Model
{
  protected $table = "usuario";
  protected $primary_key = "id";

  static public function login(string $email, string $senha): bool
  {
     $modelo = new static;
     $usuarios = $modelo::all();
     foreach ($usuarios as $key => $value) {
       if($value['email'] == $email && $value['senha'] == md5($senha)){
         session_start();
         $_SESSION['id'] = $value['id'];
         $_SESSION['nome'] = $value['nome'];
         $_SESSION['email'] = $value['email'];
         return true;
       }
     }
     return false;
  }

}