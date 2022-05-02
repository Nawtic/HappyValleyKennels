-- Script Credit: Isaac Asare --

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
GRANT SELECT, UPDATE ON LoginSystem.users TO "customercheck"@"localhost";