CREATE USER 'diabetesadmin'@'localhost' IDENTIFIED BY 'test1234!@#$';

GRANT ALL PRIVILEGES ON * . * TO 'diabetesadmin'@'localhost';

CREATE DATABASE diabetesdb;

CREATE TABLE diabetesdb.diabdata{
unique_id   	INT(10)      UNSIGNED AUTO_INCREMENT PRIMARY KEY,
region      	VARCHAR(30),
gender      	ENUM('M', 'F'),
age         	INT(3),
weight      	INT(2),
height      	FLOAT(1,2),
bmi         	FLOAT(2,1),
waist       	INT(3),
activity    	BOOLEAN,
food-habit  	ENUM('Daily', 'Nondaily'),
hbp         	BOOLEAN,
blood_sugar     BOOLEAN,
family_history  ENUM('No', 'yes-second-relation', 'yes-first-relation')
};