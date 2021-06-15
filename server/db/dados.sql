CREATE DATABASE IF NOT EXISTS devjg;
USE devjg;

CREATE TABLE IF NOT EXISTS products (
  id INT(11) AUTO_INCREMENT,
  name VARCHAR(255),
  price DECIMAL(10, 2),
  PRIMARY KEY (id)
);

INSERT INTO products ('id', 'name', 'price') VALUE (0, 'Pizza Catupiri - M', 25);
INSERT INTO products ('id', 'name', 'price') VALUE (1, 'Pizza Calabresa - GG', 90);
INSERT INTO products ('id', 'name', 'price') VALUE (2, 'Pizza Chocolate - G', 35);
INSERT INTO products ('id', 'name', 'price') VALUE (3, 'Pizza Mucarela - GG', 85);
