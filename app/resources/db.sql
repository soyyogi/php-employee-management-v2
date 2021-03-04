-- Database creation
DROP DATABASE IF EXISTS ems;
CREATE DATABASE IF NOT EXISTS ems;
USE ems;

-- Creation of the tables

CREATE TABLE employees(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
last_name VARCHAR(50),
email VARCHAR(50) UNIQUE,
gender VARCHAR(50) NOT NULL,
avatar VARCHAR(200),
age INT(2) NULL,
phone_number INT(9) NOT NULL,
city VARCHAR(50),
street_address VARCHAR (100),
state VARCHAR(50),
postal_code INT(5) 
);


CREATE TABLE users(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(128) NOT NULL
);

-- Insert of data

INSERT INTO employees (name, last_name, email, gender, avatar, age, phone_number, city, street_address, state, postal_code)
VALUES 
("Rack", "Lei", "jackon@network.com", "male", "https://pbs.twimg.com/profile_images/587511475440332800/_Y3Wl3PL.jpg", 24, 738362767, "San Jone", "126", "CA", "39221"),
("John", "Doe", "jhondoe@foo.com", "male", "https://pbs.twimg.com/profile_images/1094979667143069696/QrD0ovrh.jpg", 34, 638362767, "New York", "126", "CA", "39221"),
("Leila", "Mills", "mills@leila.com", "female", "https://m.media-amazon.com/images/M/MV5BMzI5NDIzNTQ1Nl5BMl5BanBnXkFtZTgwMjQ0Mzc1MTE@._V1_UY256_CR4,0,172,256_AL_.jpg", 26, 638362767, "San Diego", "126", "CA", "39671"),
("Richard", "Desmond", "dismond@foo.com", "male", NULL, 30, 638362767, "New York", "126", "CA", "85716"),
("Susan", "Smith", "susanmith@baz.com", "female", NULL, 28, 638362767, "New York", "126", "CA", "09563"),
("Brad", "Simpson", "brad@foo.com", "male", NULL, 40, 638362767, "Atlanta", "126", "GEO", "01928"),
("Neil", "Walker", "walkerneil@baz.com", "male", NULL, 38, 638362767, "New York", "126", "CA", "17345"),
("Rack", "Jackon", "rack@network.com", "male", NULL, 22, 638362767, "New York", "126", "CA", "68573"),
("Homer", "Eustasio", "homer@gmail.com", "male", NULL, 34, 638362767, "New York", "126", "CA", "09857"),
("Sandra", "Foo", "sandra@foo.com", "female", NULL, 34, 638362767, "New York", "126", "CA", "09274");


INSERT INTO users (name, email, password)
VALUES 
("admin", "admin@assemblerschool.com", "$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCARnllI.wzBC");