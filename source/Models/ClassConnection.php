<?php
    namespace Source\Models;

    use PDO;

    /*Production
    abstract class ClassConnection {
        protected function conectDB() 
        {
            try {
                $connection = new PDO("mysql:host=localhost;dbname=reactIntergration", "root", "");
                return $connection;
            } catch (PDOException $err) {
                echo $err->getMessage();
            }
    
        }
    }*/

    //Development
    class ClassConnection{
        private string $db="mysql";
        private string $host="localhost";
        private string $user="root";
        private string $pass="";
        private string $dbname="reactIntergration";
        private int $port=3306;
        public object $connection;

        public function connect() {
            try {
                $this->connection = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
              
                return $this->connection;
            } catch (Exception $err) {
                die('Erro !');
            }
        }

    }