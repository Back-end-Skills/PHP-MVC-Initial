<?php
    namespace Source\Models;

    class StsListarBlog extends ClassConnection {
        private object $conn;

        public function listar() {
            $this->conn = $this->connect();

            $select_db = "SELECT Id, marca, modelo, ano FROM carros ORDER BY Id DESC LIMIT 3";
            
            $req=$this->conn->prepare( $select_db );
            $req->execute();

            $res = $req->fetchAll();
 
            // var_dump($res);
            return $res;
           
            // var_dump($this->conn);
        } 
    }