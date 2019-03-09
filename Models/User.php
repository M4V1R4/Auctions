<?php

namespace Models {

    class User
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function login($email, $password)
        {
            return $this->connection->runQuery('select * from users where email = $1 and password = md5($2)', [$email, $password])[0];
        }

        public function find($id)
        {
            return $this->connection->runQuery('select * from users where id = $1', [$id])[0];
        }
    }

}

