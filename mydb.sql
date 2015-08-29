DROP DATABASE IF exists mydb;
CREATE DATABASE mydb;
USE mydb;

CREATE TABLE person(
nama VARCHAR(40),
pswd VARCHAR(20),
email VARCHAR(40),
catatan TEXT,
gender CHAR(1),
os1 CHAR(10),
os2 CHAR(10),
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id) 
)