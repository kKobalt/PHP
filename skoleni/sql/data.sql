-- MySQL dump 8.21
--
-- Host: localhost    Database: nastenka
---------------------------------------------------------
-- Server version	3.23.49

--
-- Table structure for table 'prispevky'
--

CREATE DATABASE nastenka;

USE nastenka;

CREATE TABLE prispevky 
(
	id int not null auto_increment,
	prezdivka varchar(20),
	email varchar(255),
	data varchar(512),
	primary key(id)
);

CREATE USER www@localhost IDENTIFIED BY 'heslo';


--
-- Dumping data for table 'prispevky'
--



