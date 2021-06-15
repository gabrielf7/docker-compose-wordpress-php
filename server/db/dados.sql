CREATE DATABASE IF NOT EXISTS devjg;
USE devjg;

CREATE TABLE IF NOT EXISTS products (
  id INT(11) AUTO_INCREMENT,
  name VARCHAR(255),
  price DECIMAL(10, 2),
  PRIMARY KEY (id)
);

INSERT INTO products VALUE(0, 'Pizza Catupiri - M', 25);
INSERT INTO products VALUE(0, 'Pizza Calabresa - GG', 90);
