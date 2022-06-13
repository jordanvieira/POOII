<?php
    //conexão com o banco de dados MySQL
    $pdo = new PDO('mysql:host=localhost;dbname=prova', 'root', '');

    //insere um novo registro
    $sql = $pdo->prepare('insert into pessoa (nome, idade, sexo) values (null, "", "")');
    //executa o comando SQL
    $sql->execute();


    //update um registro
    $id = 1;
    $sql = $pdo->prepare('UPDATE pessoa SET nome = "João",idade = "18" where id = $id');
    
?>