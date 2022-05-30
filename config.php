<?php
define("SERVIDOR", "localhost");
define("BANCODEDADOS", "db_poo2");
define("USUARIO","root");
define("SENHA","uepa");
define("DSN", "mysql");
//connection
$conn = new PDO (DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);
?>