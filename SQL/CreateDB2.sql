USE HAPPY_KENNEL;

CREATE TABLE owners (
	owner_id int AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15) DEFAULT NULL,
    PRIMARY KEY (owner_id)
);

CREATE TABLE dogs (
	dog_id int AUTO_INCREMENT NOT NULL,
    owner_id int NOT NULL,
    name VARCHAR(255),
    PRIMARY KEY (dog_id),
    FOREIGN KEY (owner_id) REFERENCES owners(owner_id)
);

CREATE TABLE open_drop_offs (
    owner_id int NOT NULL,
    dog_id int NOT NULL,
    drop_date DATE NOT NULL,
    retrieve_date DATE NOT NULL,
    PRIMARY KEY (owner_id, dog_id),
    FOREIGN KEY (owner_id) REFERENCES owners(owner_id),
    FOREIGN KEY (dog_id) REFERENCES dogs(dog_id)
);