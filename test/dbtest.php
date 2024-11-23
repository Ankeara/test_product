<?php 
    class dbConn{
        private $server = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'ankeara';

        public function connect(){
            try{
                $conn = new mysqli(
                    $this->server,
                    $this->user,
                    $this->pass,
                    $this->db,
                );
                return $conn;
            }catch (Exception $e){
                echo "Error: " . $e->getMessage();
            }
        }
    }