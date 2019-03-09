CREATE DATABASE proyecto;
CREATE TYPE type AS ENUM ('comprador','administrador');
CREATE TABLE users(
	id SERIAL NOT NULL PRIMARY KEY,
	first_name VARCHAR(100) NOT NULL,
	last_name VARCHAR(100) NOT NULL,
	email VARCHAR(200) NOT NULL unique,
	user_type type,
	password varchar(100) NOT NULL
);
CREATE TYPE state AS ENUM ('creada', 'proceso', 'finalizada');
CREATE TABLE auctions(
    id SERIAL NOT NULL PRIMARY KEY,
    id_product INTEGER NOT NULL,
    start_date timestamp without time zone NOT NULL,
    end_date timestamp without time zone NOT NULL,
    --id_picture,
    base_amount DOUBLE PRECISION NOT NULL,
    current_state state
);
CREATE TABLE pictures(
	id SERIAL NOT NULL PRIMARY KEY,
	id_product INTEGER NOT NULL,
	route VARCHAR NOT NULL	
);

CREATE TABLE products(
	id SERIAL NOT NULL PRIMARY KEY,
	description VARCHAR(200) NOT NULL,
	id_picture INTEGER NOT NULL
);

CREATE TABLE invoices(
	id SERIAL NOT NULL PRIMARY KEY,
	id_product INTEGER NOT NULL,
	amount DOUBLE PRECISION NOT NULL
);
-- Foreign keys

ALTER TABLE auction ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES product;
ALTER TABLE pictures ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES product;
ALTER TABLE products ADD CONSTRAINT fk_picture FOREIGN KEY (id_picture) REFERENCES pictures;
ALTER TABLE invoices ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES product;