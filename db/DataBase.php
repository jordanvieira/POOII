<?php
include_once '../config.php';

class DataBase{
    public $BancoLink;
    public $Servidor;
    public $Base;
    public $Senha;
    public $TipoBanco;

    function __construct($base, $usuario, $senha, $servidor, $tipobanco = 1)
    {

        $this->Servidor = $servidor;
        $this->Base = $base;
        $this->Usuario = $usuario;
        $this->Senha = $senha;
        $this->TipoBanco = $tipobanco;

        //TipoBanco = 1 Mysql ou Mariadb
        if ($this->BancoLink = new PDO ('mysql:host='.
                                        $this->Servidor.
                                        ';dbname='.$this->Base,
                                        $this->Usuario,
                                        $this->Senha)); 
    }

    public function SqlDml($sql){

        return $this->BancoLink->query($sql);
    }
}

?>