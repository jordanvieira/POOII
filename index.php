<?php
include_once './class/Pessoa.php';
include_once './class/Livro.php';

$query = Pessoa::GetPessoa();
$getlivro = Livro::GetLivros();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>   
<?php 

while ($row = $query->fetch()) {
    echo $row['Id']."  -  ".$row['nom_pessoa'].",  ".$row['cpf_pessoa']."<br><hr>";
}


while ($row = $getlivro->fetch()) {
    echo $row['cod_livro']." - ".$row['titulo_livro']."  -  ".$row['autor_livro'].",  ".$row['cod_isbn'].", ".$row['nome_editora'].", ".$row['qtd_paginas']."<br><hr>";

}
?>

    
</body>
</html>