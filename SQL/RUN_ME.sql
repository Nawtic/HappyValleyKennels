/*
	This file combines all scripts necessary to run the Happy Valley Kennels website
	Credits for each part of the script is given in comments before that script
*/

-- Script Credit: Alexa Miller --
-- START happy_kennel_db.sql --

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_resume`
--

DROP DATABASE IF EXISTS HAPPY_KENNEL;
CREATE DATABASE HAPPY_KENNEL;
COMMIT;
USE HAPPY_KENNEL;

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `reports` (
  `ID` INT AUTO_INCREMENT,
  `Dog Name (s)` text NOT NULL,
  `Owner Name (s)` text NOT NULL,
  `Food Type` text NOT NULL,
  `Necessary Medical Info` text NOT NULL,
  `Paid?` text NOT NULL,
  `Date Start-End` text NOT NULL,
  `Comments` text NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ID`, `Dog Name (s)`, `Owner Name (s)`, `Food Type`, `Necessary Medical Info`, `Paid?`,`Date Start-End`,`Comments`) VALUES
(1, 'Spot', 'Alex', 'Provided', 'Insulin Shots', 'Yes', 'April 20 - April 23', NULL);



--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `work_experience`
--
/*ALTER TABLE `reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- END happy_kennel_db.sql --




-- Script Credit: Stephen Erichsen --
-- START CreateDB2.sql --

-- Database creation statements removed due to conflict --

USE happy_kennel;

-- Create a table which holds all employees --

CREATE TABLE employees (
	employee_id int AUTO_INCREMENT NOT NULL,
    role VARCHAR(25) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    pending_reset BOOL NOT NULL DEFAULT True,
    PRIMARY KEY (employee_id)
);


-- Create a table which holds all dog owners --

CREATE TABLE owners (
	owner_id int AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15) DEFAULT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (owner_id)
);


-- Create a table which holds all dogs --

CREATE TABLE dogs (
	dog_id int AUTO_INCREMENT NOT NULL,
    owner_id int NOT NULL,
    name VARCHAR(255),
    size VARCHAR(25) NOT NULL,
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


-- Populate Tables With Default Data --

USE HAPPY_KENNEL;

INSERT INTO owners(first_name, last_name, email_address, password) VALUES ("Bill", "Nye", "science_guy@test.edu", "I<3Sporky");

INSERT INTO dogs(owner_id, name) VALUES (1, "Sporky");

INSERT INTO cages(cage_size) VALUES ("Large");

INSERT INTO employees(role, first_name, last_name, password, pending_reset) VALUES ("Employee", "Bill", "Board", "$2y$10$EU6Me6ejb7P.J1wOoaognO55VHMvt3iSw.gG8izmlCVEZQPzPH75a", False), ("Human Resources", "Laura", "Ipsum", "$2y$10$EU6Me6ejb7P.J1wOoaognO55VHMvt3iSw.gG8izmlCVEZQPzPH75a", False); 

INSERT INTO open_drop_offs(owner_id, dog_id, cage_id, drop_date, retrieve_date) VALUES (1, 1, 1, now(), date_add(now(), INTERVAL 3 DAY));

-- Create DB Users --

DROP USER IF EXISTS "HR"@"localhost";
CREATE USER "HR"@"localhost" IDENTIFIED BY "HR";
GRANT SELECT, UPDATE, INSERT ON happy_kennel.employees TO "HR"@"localhost";

DROP USER IF EXISTS "logincheck"@"localhost";
CREATE USER "logincheck"@"localhost" IDENTIFIED BY "loginmanage";
GRANT SELECT, UPDATE ON happy_kennel.employees TO "logincheck"@"localhost";

-- END CreateDB2.sql --




-- Script Credit: Isaac Asare --
-- START LoginSystem.sql --

DROP DATABASE IF EXISTS LoginSystem;
CREATE DATABASE LoginSystem;
USE LoginSystem;

CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);

DROP USER IF EXISTS "customercheck"@"localhost";
CREATE USER "customercheck"@"localhost" IDENTIFIED BY "loginmanage";
GRANT SELECT, UPDATE, INSERT ON LoginSystem.users TO "customercheck"@"localhost";

-- END LoginSystem.sql --




-- Script Credit: Andres Bastidas --
-- START registro5.sql --

Drop database if exists registro5;
Create database registro5;

Use registro5;

Create table scheduling
(
	Id		Int(10)		Primary Key 	AUTO_INCREMENT,
    Name	varchar(50),
    Email	varchar(50),
    DogName	varchar(25),
    Breed	varchar(25),
    Phone	int(10),
    Address	varchar(100),
    Gender	varchar(25),
    Size	varchar(25),
    CheckIn	varchar(25),
    CheckOut varchar(25)
);

CREATE TABLE checkout (
    Id INT(10) PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50),
    Email VARCHAR(50),
    Address VARCHAR(100),
    City VARCHAR(50),
    State VARCHAR(2),
    Zip INT(5),
    Cardname VARCHAR(50),
    Cardnumber INT(16),
    Expmonth VARCHAR(25),
    Expyear INT(4),
    Cvv INT(3)
);

DROP USER IF EXISTS "Scheduler"@"localhost";
CREATE USER "Scheduler"@"localhost" IDENTIFIED BY "Sched";
GRANT INSERT ON registro5.scheduling TO "Scheduler"@"localhost";

-- END registro5.sql --




-- Script Credit: Mauricio Ernesto Alfaro Aragon --
-- START registro_db.sql --

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

-- END registro_db.sql --