-- Script Credit: Andres Bastidas --

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