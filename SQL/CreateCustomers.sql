USE KennelDB;

CREATE TABLE customers (
	id INT(3) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    email_address VARCHAR(40) NOT NULL,
    phone_number VARCHAR(12) NOT NULL
);

INSERT INTO customers(first_name, last_name, email_address, phone_number) VALUES ("Jane", "Doe", "jane.doe@gmail.com", "111-222-3456");

CREATE USER "1001"@"localhost" IDENTIFIED BY "1234";

GRANT SELECT
ON kenneldb.customers
TO "1001"@"localhost";