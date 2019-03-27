<?php

namespace Models {

    class Product
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($nombre, $description, $id_admin)
        {
            $this->connection->runStatement('INSERT INTO products (nombre, description, id_admin) 
            VALUES ($1, $2, $3)', [$nombre, $description, $id_admin]);
        }
    }
                          

}