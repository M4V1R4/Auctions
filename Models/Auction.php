<?php
namespace Models {

    class Auction
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM auctions WHERE id = $1', [$id])[0];
        }
        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM auctions WHERE id = $1', [$id]);
        }
        public function update($id,$start_date, $end_date,$base_amount,$current_state)
        {
            $this->connection->runStatement('UPDATE auctions SET start_date = $2, end_date = $3, base_amount = $4,current_state = $5 WHERE id = $1', [$id, $start_date, $end_date,$base_amount,$current_state]);
        }
        public function create($start_date, $end_date, $base_amount,$current_state,$id_admin)
        {
            $this->connection->runStatement('INSERT INTO auctions (start_date,end_date,base_amount,current_state,id_admin) VALUES ($1, $2, $3, $4, $5)',[$start_date, $end_date, $base_amount, $current_state,$id_admin]);
        }
         public function create_auction_products($id_auction, $id_product){
            $this->connection->runStatement('INSERT INTO auction_products (id_auction,id_product) VALUES ($1, $2)',[$id_auction, $id_product]);
        }
        public function all_auction_products($id_auction, $id_product)
        {
            return $this->connection->runQuery('select p.id,p.nombre, p.description,
                        d.id,d.start_date,d.end_date,d.base_amount,d.current_state,
                        a.id_product, a.id_auction
                        from products p inner join auction_products a
                        on p.id = a.id_product
                        inner join auctions d
                        on d.id = a.id_auction',[$id_auction,$id_product]);
        }
        public function all($user)
        {
            return $this->connection->runQuery('SELECT * FROM auctions WHERE id_admin =$1',[$user]);
        }
        public function all_products($user)
        {
            return $this->connection->runQuery('SELECT * FROM products WHERE id_admin =$1',[$user]);
        }
    }
}

