<?php
include_once 'db/DataBase.php';
include_once 'config.php';

class Pessoa {
    public static function GetPessoa(){

        $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);

        return $db->SqlDml("SELECT * FROM pessoa");

    }
}
?>