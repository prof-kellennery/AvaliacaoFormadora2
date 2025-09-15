<?php

class Conexao{
    private static $instancia;
    
    private function __construct(){}
    
    public static function getConexao()
    {
        if (!isset(self::$instancia))
        {
            // fazer a conexão do banco de dados
        }
        return self::$instancia;
    }
}


?>