-- Script Credit: Ashton Paiz --
DROP DATABASE IF EXISTS companyBill_and_inventory;
CREATE DATABASE companyBill_and_inventory;
USE companyBill_and_inventory;

CREATE TABLE inventory (
	consumable_id int primary key auto_increment,
	consumable_name varchar(255) not null,
    amount_in_stock int not null,
    amount_ordered int not null,
    reason varchar(255) not null
);

CREATE TABLE food_billing (
	food_id int primary key auto_increment,
	company varchar(255) not null,
    number_of_bags int not null,
    price_per_bag int not null,
    total_cost int not null,
    food_type varchar(255) not null,
    specialty varchar(255) not null default 'None',
    reliability int(5) not null
);

CREATE TABLE medicine_billing (
	medicine_id int primary key auto_increment,
	medicine_type varchar(255) not null,
    number_of_containers int not null,
    price_per_container int not null,
    total_cost int not null
);

CREATE TABLE utility_billing (
	utility_id int primary key auto_increment,
	utility_type varchar(255) not null,
    last_month_payment int not null,
    last_year_payment int not null
);

INSERT INTO inventory (consumable_id, consumable_name, amount_in_stock, amount_ordered, reason) VALUES
	(1, 'Dog food', '50 bags', 20, 'Food'),
    (2, 'Insulin', '10 containers', 40, 'Diabetes'),
    (3, 'Trilostane', '8 containers', 20, 'Cushings disease');
    
SELECT * FROM inventory;

INSERT INTO food_billing (food_id, company, number_of_bags, price_per_bag, total_cost, food_type, specialty, reliability) VALUES
	(1, 'ABC', 20, 25, 500, 'Dry', default, 2),
    (2, 'DEF', 25, 22, 550, 'Dry', default, 4),
	(3, 'GHI', 18, 32, 576, 'Dry', 'Vitamin', 3); 
    
SELECT * FROM food_billing;

INSERT INTO medicine_billing (medicine_id, medicine_type , number_of_containers, price_per_container, total_cost) VALUES
    (1, 'Insulin', '10 containers', 100, 1000),
    (2, 'Trilostane', '8 packs', 75, 600);
    
    SELECT * FROM medicine_billing;
    
INSERT INTO utility_billing (utility_id, utility_type, last_month_payment, last_year_payment) VALUES
    (1, 'Electric', 250, 1900),
    (2, 'Water', 175, 1330);
    
    SELECT * FROM utility_billing;