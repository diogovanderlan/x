<?php
namespace Config;

class Db
{
  public static function conexao()
  {
    $conexao = new \PDO("mysql:host=localhost;dbname=prodx;charset=utf8","root","admin");
    return $conexao;
  }
}