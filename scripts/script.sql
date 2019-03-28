CREATE DATABASE proyecto;
CREATE TABLE users(
	id SERIAL NOT NULL PRIMARY KEY,
	first_name VARCHAR(100) NOT NULL,
	last_name VARCHAR(100) NOT NULL,
	email VARCHAR(200) NOT NULL unique,
	is_admin boolean NOT NULL,
	password varchar(100) NOT NULL
);
CREATE TYPE state AS ENUM ('creada', 'proceso', 'finalizada');
CREATE TABLE auctions(
    id SERIAL NOT NULL PRIMARY KEY,
    start_date date  NOT NULL,
    end_date date NOT NULL,
    base_amount DOUBLE PRECISION NOT NULL,
    current_state state,
    id_admin INTEGER NOT NULL
);
CREATE TABLE pictures(
	id SERIAL NOT NULL PRIMARY KEY,
	id_product INTEGER NOT NULL,
	route VARCHAR NOT NULL	
);

CREATE TABLE products(
	id SERIAL NOT NULL PRIMARY KEY,
	nombre VARCHAR(200) NOT NULL,
	description VARCHAR(200) NOT NULL,
	id_admin INTEGER NOT NULL
);

CREATE TABLE invoices(
	id SERIAL NOT NULL PRIMARY KEY,
	id_product INTEGER NOT NULL,
	amount DOUBLE PRECISION NOT NULL
);
create table auction_products(
	id SERIAL NOT NULL PRIMARY KEY,
	id_auction INTEGER NOT NULL,
	id_product INTEGER NOT NULL
); 

-- Foreign keys

ALTER TABLE auction ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES product;
ALTER TABLE pictures ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES product;
ALTER TABLE invoices ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES product;
ALTER TABLE auction ADD CONSTRAINT fk_admin FOREIGN KEY (id_admin) REFERENCES users;
ALTER TABLE products ADD CONSTRAINT fk_admin FOREIGN KEY (id_admin) REFERENCES users;
ALTER TABLE auction_products ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES products;
ALTER TABLE auction_products ADD CONSTRAINT fk_auction FOREIGN KEY (id_auction) REFERENCES auctions;