<?php
include_once './class/Pessoa.php';
include_once './class/Livro.php';

if (isset($_GET["CodExcluir"])) {
    $id=$_GET["CodExcluir"];
    $delete = Pessoa::deletePessoa($id);   
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
    <h2 class = "text-center">Painel Administrativo</h2>
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
                    <input type="submit" value="Excluir"id="CodExcluir" name="CodExcluir" />
                    </a>
                </td>
                </tr>
            </tbody>
        <?php
            } ?>
        </table>
</article> <!-- final  article (container)-->

<?php 

while ($row = $getlivro->fetch()) {
    echo $row['cod_livro']." - ".$row['titulo_livro']."  -  ".$row['autor_livro'].",  ".$row['cod_isbn'].", ".$row['nome_editora'].", ".$row['qtd_paginas']."<br><hr>";

}
?>

    
</body>
</html>