CREATE DATABASE corsell_db;

use corsell_db;

CREATE TABLE users_category (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    pseudo VARCHAR(100),
    adress TEXT NOT NULL,
    age TINYINT NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT null,
    avatar VARCHAR(50),
    prime BOOLEAN DEFAULT false,
    id_users_category TINYINT NOT NULL,
    FOREIGN KEY (id_users_category) REFERENCES users_category(id)
);

CREATE TABLE payment (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE delivery (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE commands (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_payment TINYINT NOT NULL,
    id_delivery TINYINT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id),
    FOREIGN KEY (id_payment) REFERENCES payment(id),
    FOREIGN KEY (id_delivery) REFERENCES delivery(id)
);

CREATE TABLE brands (
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    picture VARCHAR(255) NOT NULL
);

CREATE TABLE category (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    picture VARCHAR(255) NOT NULL
);

CREATE TABLE subcategory (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    id_category TINYINT,
    FOREIGN KEY (id_category) REFERENCES category(id)
);

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    picture VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(7,2) NOT NULL,
    promo INT,
    quantity INT,
    sell_number INT,
    id_category TINYINT,
    id_brands SMALLINT,
    id_subcategory TINYINT,
    FOREIGN KEY (id_subcategory) REFERENCES subcategory(id),
    FOREIGN KEY (id_category) REFERENCES category(id),
    FOREIGN KEY (id_brands) REFERENCES brands(id)
);

CREATE TABLE products_command (
    id_command INT PRIMARY KEY AUTO_INCREMENT,
    id_products INT,
    FOREIGN KEY (id_command) REFERENCES commands(id),
    FOREIGN KEY (id_products) REFERENCES products(id)
);