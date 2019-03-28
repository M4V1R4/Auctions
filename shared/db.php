<?php

require_once __DIR__ . '/../Db/PgConnection.php';
require_once __DIR__ . '/../Models/User.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Auction.php';

use Db\PgConnection;

$con = new PgConnection('postgres', '12345', 'proyecto', 5432, 'localhost');
$con->connect();

$user_model = new Models\User($con);
$product_model = new Models\Product($con);
$auction_model = new Models\Auction($con);
