<?php
include_once './class/Pessoa.php';

$query = Pessoa::GetPessoa();

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
?>
    
</body>
</html>