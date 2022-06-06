<?php
include_once 'db/DataBase.php';
include_once 'config.php';

class Pessoa {
    public static function GetPessoa(){

        $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);

        return $db->Query("SELECT * FROM pessoa");

    }

    public static function deletePessoa($id){

        $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);

        $sql = "DELETE FROM pessoa WHERE Id=$id";

        return $db->SqlDml($sql);
    }
}
?>