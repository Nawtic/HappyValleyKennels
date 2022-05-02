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

SELECT * FROM datos