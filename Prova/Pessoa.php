<?php
    class Pessoa {
        //ATRIBUTOS DA CLASSE
        private $nome;
        private $idade;
        private $sexo;

        //METODO CONSTRUTOR PARA INICIALIZAR OS ATRIBUTOS
        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        //METODO PARA SETAR OS ATRIBUTOS
        public function setPessoa($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        //METODO PARA RETORNAR OS ATRIBUTOS
        public function getPessoa() {
            return "Nome: " . $this->nome
            . " Idade: "
            . $this->idade
            . " Sexo: "
            . $this->sexo;
        }
    }


?>