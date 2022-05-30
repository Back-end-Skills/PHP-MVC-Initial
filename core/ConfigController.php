<?php
    namespace Core;
    
    class ConfigController {

        private string $url;
        private array $url_param;
        private string $url_controller;
        private string $url_metodo;

        public function __construct() {
            
            
            if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) 
            {
                $this->url =filter_input(INPUT_GET, "url", FILTER_DEFAULT);
                
                //Separar os arrys por /
                $this->url_param=explode("/", $this->url);

                // var_dump($this->url_param);


                //Verificação
                if((isset($this->url_param[0])) && (isset($this->url_param[1]))) 
                {
                    //Pegar cada position
                    $this->url_controller = $this->url_param[0];
                    $this->url_metodo = $this->url_param[1];
                } else {
                    $this->url_controller = "err";
                    $this->url_metodo = "index";
                }

            } else {
                //Home 
                $this->url_controller = "home";
                $this->url_metodo = "index";
            }

            // echo "Controller: {$this->url_controller} - Metodo {$this->url_metodo} ";
        
        }

        public function carregar() {
            //Converter string maisculo
            $url_controller = ucwords($this->url_controller); 

            // echo "\\Source\\Controllers\\". $this->url_controller;
            $classe =  "\\Source\\Controllers\\". $url_controller;
            // echo $classe;
            
            $classe_carregar=new $classe;

            $classe_carregar->index();
        }
    }