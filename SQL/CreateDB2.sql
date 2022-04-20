DROP DATABASE IF EXISTS happy_kennel;

CREATE DATABASE happy_kennel;

USE happy_kennel;

-- Create a table which holds all dog owners --

CREATE TABLE owners (
	owner_id int AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15) DEFAULT NULL,
    PRIMARY KEY (owner_id)
);


-- Create a table which holds all dogs --

CREATE TABLE dogs (
	dog_id int AUTO_INCREMENT NOT NULL,
    owner_id int NOT NULL,
    name VARCHAR(255),
    PRIMARY KEY (dog_id),
    FOREIGN KEY (owner_id) REFERENCES owners(owner_id)
);

-- Create a table which holds all stocked food items --

CREATE TABLE food (
	food_id int AUTO_INCREMENT NOT NULL,
    food_name VARCHAR(255) NOT NULL,
    stock int NOT NULL DEFAULT 0,
    PRIMARY KEY (food_id)
);

-- Create a table which holds all kennel cages --

CREATE TABLE cages (
	cage_id int AUTO_INCREMENT NOT NULL,
    cage_size VARCHAR(25) NOT NULL,
    PRIMARY KEY (cage_id)
);


-- Create a table which holds all vaccines --

CREATE TABLE vaccines (
	vaccine_id int AUTO_INCREMENT NOT NULL,
    vaccine_name VARCHAR(255) NOT NULL,
    stock int NOT NULL DEFAULT 0,
    PRIMARY KEY (vaccine_id)
);


-- Create a table which holds all medications --

CREATE TABLE medication (
	med_id int AUTO_INCREMENT NOT NULL,
    med_name VARCHAR(255) NOT NULL,
    stock int NOT NULL DEFAULT 0,
    PRIMARY KEY (med_id)
);



-- Create a table which holds information about dogs currently in the kennel's care --

CREATE TABLE open_drop_offs (
    owner_id int NOT NULL,
    dog_id int NOT NULL,
    cage_id int NOT NULL,
    drop_date DATE NOT NULL,
    retrieve_date DATE NOT NULL,
    PRIMARY KEY (owner_id, dog_id),
    FOREIGN KEY (owner_id) REFERENCES owners(owner_id),
    FOREIGN KEY (dog_id) REFERENCES dogs(dog_id),
    FOREIGN KEY (cage_id) REFERENCES cages(cage_id)
);


-- Create a table which contains all dogs' food preferences --

CREATE TABLE food_preferences (
	food_id int NOT NULL,
    dog_id int NOT NULL,
    PRIMARY KEY (food_id, dog_id),
    FOREIGN KEY (food_id) REFERENCES food(food_id),
    FOREIGN KEY (dog_id) REFERENCES dogs(dog_id)
);


-- Create a table which records all dogs' vaccination history --

CREATE TABLE vaccination_records (
	vaccine_id int NOT NULL,
    dog_id int NOT NULL,
    vaccination_date DATE NOT NULL,
    PRIMARY KEY (vaccine_id, dog_id),
    FOREIGN KEY (vaccine_id) REFERENCES vaccines(vaccine_id),
    FOREIGN KEY (dog_id) REFERENCES dogs(dog_id)
);


-- Create a table which tracks all dogs' medication requirements --

CREATE TABLE required_meds (
	med_id int NOT NULL,
    dog_id int NOT NULL,
    PRIMARY KEY (med_id, dog_id),
    FOREIGN KEY (med_id) REFERENCES medication(med_id),
    FOREIGN KEY (dog_id) REFERENCES dogs(dog_id)
);