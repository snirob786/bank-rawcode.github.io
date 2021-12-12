<?php
    include "config.php";


    class DB{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $db;
        private $error;

        public function __construct(){
            $this->connectDB();
        }

        public function connectDB(){
            $this->db = new mysqli($this->host,$this->user,$this->pass,$this->dbname);

            if (!$this->db){
                $this->error = "Connection Fail".$this->db->connect_error;
                return $this->error;
            }
        }

        public function real_escape($data){
            return mysqli_real_escape_string($this->db,$data);
        }


        public function select($query){
            return $result = mysqli_query($this->db,$query);
        }

        public function insert($query){
            return $result = mysqli_query($this->db,$query);
        }

        public function update($query){
            return $result = mysqli_query($this->db,$query);
        }

        public function delete($query){
            return $result = mysqli_query($this->db,$query);

        }




    }