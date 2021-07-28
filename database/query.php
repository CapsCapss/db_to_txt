<?php

    class Queries {

        public function getData(): array {
            require "database/connect.php";

            $sql = "SELECT * FROM students";

            $statement = $connection->prepare($sql);
            $statement->execute();

            $data = $statement->fetchAll(PDO::FETCH_OBJ);

            return $data;
        }
        
        public function create($file) {
            require "database/connect.php";
            
            $sql = file_get_contents($file);
            $statement = $connection->prepare($sql);
            $statement->execute();

            header("Location: /dbtxt");
        }
    }


?>