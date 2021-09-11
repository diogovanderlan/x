<?php
namespace Config;

class Db
{
  public static function conexao()
  {
    $conexao = new \PDO("mysql:host=localhost;dbname=x;charset=utf8","root","");
    return $conexao;
  }
}
