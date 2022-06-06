<?php
include_once './class/Pessoa.php';
include_once './class/Livro.php';

if (isset($_GET["CodExcluir"])) {
    $id=$_GET["CodExcluir"];
    $delete = Pessoa::deletePessoa($id);   
}


if (isset($_GET["CodExclui"])) {
    $CodLivro=$_GET["CodExclui"];
    $delete = Livro::Delete($CodLivro);   
}

$query = Pessoa::GetPessoa();
$getlivro = Livro::GetLivros();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body class="myBackground">   

<article class="container">
    <h2 id="panel" class = "text-center">Painel Administrativo</h2>
        <table class="table table-dark table-hover " >
            <thead>
                <tr class = "text-center">
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">CPF</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
            <?php
                while ($row = $query->fetch()) {
                ?>
            <tbody>
                <tr class = "text-center">
                <td><?php echo($row["Id"]); ?></td>
                <td><?php echo ($row["nom_pessoa"]); ?></td>
                <td><?php echo($row["cpf_pessoa"]); ?></td>
                <td>
                    <a href="index.php?CodExcluir=<?php echo($row["Id"]); ?>">
                    <input class="botao" type="submit" value="Excluir"id="CodExcluir" name="CodExcluir" />
                    </a>
                </td>
                </tr>
            </tbody>
        <?php
            } ?>
        </table>

        <h3 id="panel" class = "text-center">LIVROS</h3>
        <table class="table table-dark table-hover " >
            <thead>
                <tr class = "text-center">
                <th scope="col">ID</th>
                <th scope="col">TITULO</th>
                <th scope="col">AUTOR</th>
                <th scope="col">ISBN</th>
                <th scope="col">EDITORA</th>
                <th scope="col">QTD_PAGINAS</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
            <?php
                while ($row = $getlivro->fetch()) {
                ?>
            <tbody>
                <tr class = "text-center">
                <td><?php echo($row["cod_livro"]); ?></td>
                <td><?php echo ($row["titulo_livro"]); ?></td>
                <td><?php echo($row["autor_livro"]); ?></td>
                <td><?php echo($row["cod_isbn"]); ?></td>
                <td><?php echo($row["nome_editora"]); ?></td>
                <td><?php echo($row["qtd_paginas"]); ?></td>
                <td>
                    <a href="index.php?CodExclui=<?php echo($row["cod_livro"]); ?>">
                    <input class="botao" type="submit" value="Excluir"id="CodExclui" name="CodExclui" />
                    </a>
                </td>
                </tr>
            </tbody>
        <?php
            } ?>
        </table>
</article> <!-- final  article (container)-->


</body>
</html>