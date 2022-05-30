<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>
    <h2>Cadastro de livros</h2>
    <form action="inclui.php" method="POST">
        <label for="titulo_livro">Título: </label>
        <input type="text" name="titulo_livro" id="titulo_livro"><br><br>
        <label for="cod_isbn">ISBN: </label>
        <input type="text" name="cod_isbn" id="cod_isbn"><br><br>
        <label for="autor_livro">Autor: </label>
        <input type="text" name="autor_livro" id="autor_livro"><br><br>
        <label for="nome_editora">Editora: </label>
        <input type="text" name="nome_editora" id="nome_editora"><br><br>
        <label for="qtd_paginas">Qtd. Página: </label>
        <input type="text" name="qtd_paginas" id="qtd_paginas"><br><br>
        <br>
        <input type="submit" value="Incluir">
    </form>
</body>
</html>