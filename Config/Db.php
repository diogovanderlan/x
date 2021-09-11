<?php 
//nomespace Config;
class Db {
    public static function conexao(){
        $con_string = "host=newmyseries.cbw1u0pvumzq.sa-east-1.rds.amazonaws.com port=5432 dbname=banco_series user=x password=";

        $conexao = pg_connect($con_string) or die ("Não foi possivel conectar ao servidor aws");

        return $conexao;
    }
}