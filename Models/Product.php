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
            return $this->connection->runQuery('select * from users where id = $1', [$id])[0];
        }
        public function create($descripcion, $id_picture, $id_admin)
        {
            $this->connection->runStatement('INSERT INTO users (descripcion, id_picture, id_admin) VALUES ($1, $2, $3)', [$descripcion, $id_picture, $id_admin]);
        }
    }
                          

}