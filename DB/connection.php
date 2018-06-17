<?php

class DatabaseConnection {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "moodle";

        function fetch($sql) {
            try {
                $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 
                $resultsArray = $conn->query($sql);
                return $resultsArray;
                
            }
            catch(PDOException $e)
            {
                return $e->getMessage();
            }
        }
    }
    




?>