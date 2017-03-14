CREATE USER 'diabetesadmin'@'localhost' IDENTIFIED BY 'test1234!@#$';

GRANT ALL PRIVILEGES ON * . * TO 'diabetesadmin'@'localhost';

CREATE DATABASE IF NOT EXISTS 'diabetesdb' DEFAULT CHARACTER
set latin1 COLLATE utf8_general_ci;
USE 'diabetesdb';

CREATE TABLE IF NOT EXISTS 'diabdata'{
unique_id   	INT(10)      UNSIGNED AUTO_INCREMENT PRIMARY KEY,
session_id      VARCHAR(50),
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
family_history  ENUM('No', 'yes-second-relation', 'yes-first-relation'),
risk            ENUM('1', '2', '3', '4', '5')
} ENGINE=MariaDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS 'administrators'{
id              INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username        VARCHAR(20),
password        VARCHAR(20)

}ENGINE=MariaDB DEFAULT CHARSET=latin1;

INSERT INTO 'administrators'('username', 'password')VALUES
('pru0_diabrisk', 'vuHgu6W'),
('pru1_diabrisk', 'HVwxEVp'),
('pru2_diabrisk', 'RF5zeAC'),
('pru3_diabrisk', 'tm2K2pj'),
('pru4_diabrisk', 'pjFTMra'),
('pru5_diabrisk', 'fv7YrBv');