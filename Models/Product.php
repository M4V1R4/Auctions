<?php

namespace Models {

    class Product
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM products WHERE id = $1', [$id])[0];
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

        public function update($id, $nombre, $description)
        {
            $this->connection->runStatement('UPDATE products SET nombre = $2, description = $3 WHERE id = $1', [$id, $nombre, $description]);
        }

        public function all()
        {
            return $this->connection->runQuery('SELECT * FROM products');
        }
    }                 
}