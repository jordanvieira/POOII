<?php
  // AutoLoad de classes
 function myAutoLoad($class) {
     if(file_exists($class.'.php')) {
        include($class.'.php');
     }
 }
 // registra a função myAutoLoad para ser chamada automaticamente quando um objeto for instanciado
 spl_autoload_register('myAutoLoad');
 


  $pessoa = new Pessoa("João", 20, "M");//instanciação de objeto com o construtor
  echo $pessoa->getPessoa(); //imprime os atributos do objeto

  $pessoa->setPessoa("Maria", 25, "F");//seta os atributos do objeto
    echo '<hr/>';//separação de linhas
    echo $pessoa->getPessoa();
    echo '<hr/>';


  $pessoa2 = new Pessoa("José", 30, "M");//instanciação de objeto com o construtor
  echo 'Pessoa 2: <br/>'.$pessoa2->getPessoa();
  $pessoa2 ->setPessoa("Jordan", 20, "M");
  echo '<hr/>';
  echo $pessoa2 ->getPessoa();

  echo "<hr/>";

  $teste = new Teste();//instancia o objeto
  $teste->teste = "testando o teste da parada";//atribui o valor ao atributo
  echo $teste->teste;//imprime o valor do atributo
?>