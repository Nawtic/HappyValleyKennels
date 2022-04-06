USE KennelDB;

CREATE TABLE employees (
	id INT(3) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    email_address VARCHAR(40) NOT NULL,
    phone_number VARCHAR(12) NOT NULL
);

INSERT INTO employees(first_name, last_name, email_address, phone_number) VALUES ("Bill", "Board", "billsboards@outlook.com", "222-333-4567");

CREATE USER "2001"@"localhost" IDENTIFIED BY "1234";

GRANT SELECT
ON kenneldb.employees
TO "2001"@"localhost";