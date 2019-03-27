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

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM products WHERE id = $1', [$id]);
        }

        public function update($id, $brand, $year)
        {
            $this->connection->runStatement('UPDATE cars SET brand = $2, year = $3 WHERE id = $1', [$id, $brand, $year]);
        }

        public function all()
        {
            return $this->connection->runQuery('SELECT * FROM products');
        }
    }                 
}