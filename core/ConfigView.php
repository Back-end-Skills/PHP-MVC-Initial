<?php
    namespace Core;

    class ConfigView{
        private string $nome;
        private array $dados;

        public function __construct(string $nome, array $dados) {
            $this->nome = $nome;
            $this->dados= $dados;

            // echo "Views: " . $this->nome;
            // var_dump( $this->dados );

        }

        public function renderizar() {
            if(file_exists('source/' . $this->nome . '.php')) 
            {
                include 'source/' .$this->nome. '.php';
            } else {
                echo "Err!";
            }
        }
    }