<?php
//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','littlehost');
    
class Conexao{
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        // $this->conexao = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        
        // $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        // $this->mysqli->query("SET NAMES 'utf8'");
        // $this->mysqli->query('SET character_set_connection=utf8');
        // $this->mysqli->query('SET character_set_client=utf8');
        // $this->mysqli->query('SET character_set_results=utf8');
    }

    public function getConexao() {
        return $this->mysqli;
    }
}