<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de livros</title>
</head>
<body class="body">
<div class="containe">
    <h1>Cadastro de livros</h1>
    <form action="inclui.php" method="POST">
        <div class="form-control"> 
            <label for="titulo_livro">Título: </label>
            <input type="text" name="titulo_livro" id="titulo_livro">
        </div>

        <div class="form-control"> 
        <label for="cod_isbn">ISBN: </label>
        <input type="text" name="cod_isbn" id="cod_isbn">
        </div>

        <div class="form-control"> 
        <label for="autor_livro">Autor: </label>
        <input type="text" name="autor_livro" id="autor_livro">
        </div>

        <div class="form-control"> 
        <label for="nome_editora">Editora: </label>
        <input type="text" name="nome_editora" id="nome_editora">
        </div>

        <div class="form-control"> 
        <label for="qtd_paginas">Qtd. Página: </label>
        <input type="text" name="qtd_paginas" id="qtd_paginas">
        </div>
        <input class="btn" type="submit" value="Incluir">
    </form>
</div>
<script src="js/form.js"></script>
</body>
</html>