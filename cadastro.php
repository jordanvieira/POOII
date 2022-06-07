<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de livros</title>
</head>
<body class="body">
<div class="container">
    <h1>Cadastro de livros</h1>
    <form action="inclui.php" method="POST">
        <div class="form-control"> 
            <input type="text" required name="titulo_livro" id="titulo_livro">
            <label for="titulo_livro">Título: </label>
        </div>

        <div class="form-control">
            <input type="text" required name="cod_isbn" id="cod_isbn"> 
            <label for="cod_isbn">ISBN: </label>
        </div>

        <div class="form-control">
            <input type="text" required name="autor_livro" id="autor_livro"> 
            <label for="autor_livro">Autor: </label>
        </div>

        <div class="form-control"> 
            <input type="text" required name="nome_editora" id="nome_editora">
            <label for="nome_editora">Editora: </label>
        
        </div>

        <div class="form-control">
        <input type="text" required name="qtd_paginas" id="qtd_paginas">
        <label for="qtd_paginas">Qtd. Página: </label>
        </div>
        <input class="btn" type="submit" value="Incluir">
    </form>
</div>

<script src="js/form.js"></script>
</body>
</html>