<?php
    namespace Source\Controllers;

    class Blog {

        private array $dados;

        public function index() {
            // echo "Controllers Blog.php";

            $list_archives=new \Source\Models\StsListarBlog();
            $this->dados['cars']=$list_archives->listar();
            // var_dump( $this->dados['cars']);

            $carregar_view=new \Core\ConfigView("views/blog/listarCars", $this->dados);

            $carregar_view->renderizar();
            
        }
    }