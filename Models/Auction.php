<?php
namespace Models {

    class Auction
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }
        public function create($start_date, $end_date, $base_amount,$current_state)
        {
            $this->connection->runStatement('INSERT INTO auctions (start_date,end_date,base_amount,current_state) VALUES ($1, $2, $3, $4)',[$start_date, $end_date, $base_amount, $current_state]);
        }
        public function all($user)
        {
            return $this->connection->runQuery('SELECT * FROM auctions WHERE id_admin =$1',[$user]);
        }
    }
}

