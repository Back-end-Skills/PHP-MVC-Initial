<?php
    namespace Source\Controllers;

    class Blog {
        public function index() {
            echo "page blog";

            $list_archives=new \Source\Models\StsListarBlog();
            $list_archives->listar();
            
        }
    }