<?php
include_once 'db/DataBase.php';
include_once 'config.php';

class Livro {
    public static function GetLivros(){

        $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);

        return $db->Query("SELECT * FROM livros");

    }

    public static function Insert($Titulo, $Autor, $Isbn, $Editora, $QtdPaginas){

        $sql = "INSERT INTO livros (titulo_livro,autor_livro, cod_isbn,nome_editora,qtd_paginas)".
                "VALUES('$Titulo', '$Autor','$Isbn', '$Editora', '$QtdPaginas')";
        

        $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        
        return $db->SqlDml($sql);
    }
}
?>