<?php
include_once './class/Livro.php';
include_once './class/Pessoa.php';


$titulo_livro = isset($_POST['titulo_livro']) ? $_POST['titulo_livro'] : null;
$cod_isbn = isset($_POST['cod_isbn']) ? $_POST['cod_isbn'] : null;
$autor_livro = isset($_POST['autor_livro']) ? $_POST['autor_livro'] : null;
$nome_editora = isset($_POST['nome_editora']) ? $_POST['nome_editora'] : null;
$qtd_paginas = isset($_POST['qtd_paginas']) ? $_POST['qtd_paginas'] : null;


if (empty($titulo_livro) || empty($cod_isbn) || empty($autor_livro) || empty($nome_editora) || empty($qtd_paginas)) {
    echo "Preencha todos os campos!";
    exit;

} else {
    $livro = Livro::Insert($titulo_livro, $autor_livro, $cod_isbn, $nome_editora, $qtd_paginas);
    echo "Livro cadastrado com sucesso!";
}



// $stmt = $PDO->prepare($sql);
// $stmt->bindParam(':titulo_livro', $titulo_livro);
// $stmt->bindParam(':autor_livro', $autor_livro);
// $stmt->bindParam(':cod_isbn', $cod_isbn);
// $stmt->bindParam(':nome_editora', $nome_editora);
// $stmt->bindParam(':qtd_paginas', $qtd_paginas);
// if($stmt->execute()){
//     header('Location: inclui.php');
// }else{
//     echo "Erro ao cadastrar livro!";
//     print_r($stmt->errorInfo());
// }

?>