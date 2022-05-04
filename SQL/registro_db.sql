-- Mauricio Ernesto Alfaro Aragon
DROP DATABASE IF EXISTS registro;
CREATE DATABASE registro;
USE registro;

CREATE TABLE datos(
Id INT(10) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR (100),
dog VARCHAR (100),
email VARCHAR (100),
concern VARCHAR (300),
received_date date
);

CREATE TABLE messages(
	ID INT (3) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    phone VARCHAR(11),
    email VARCHAR(100),
    subject VARCHAR(100),
    message VARCHAR(300),
	received_date date
);

INSERT INTO messages(name, phone, email, subject, message, received_date) VALUES ("Person", "11234567890", "person@email.com", "Dogs", "Message about dogs", now());

SELECT * FROM datos;

SELECT * FROM messages;