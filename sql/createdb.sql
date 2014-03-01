###Creating database and tables

DROP DATABASE IF EXISTS tacotruck;

CREATE DATABASE tacotruck;
USE tacotruck;

/*
	Table: Users
	Info:
	id - auto incremented 
	fname - first name of user
	lname - last name of user 
	email - valid email used to confirm user
	password - used to login to the website. Hashed into bin
	cctype - Type of credit card being used; IE Visa
	ccnum - credit card number. Hashed into bin
	isonline - self-explanatory
*/

CREATE TABLE users  
(
	id 				INT UNSIGNED			NOT NULL AUTO_INCREMENT,
	fname			VARCHAR(256)			NOT NULL,
	lname			VARCHAR(256)			NOT NULL,
	email			VARCHAR(256)			NOT NULL,
	password 		BINARY(64)				NOT NULL,
	cctype			VARCHAR(64)				NOT NULL,
	ccnum			BINARY(64)				NOT NULL,			
	isonline bool	DEFAULT FALSE			NOT NULL,
	PRIMARY KEY 	(id)
);

CREATE TABLE locations
(
	name			VARCHAR(256)			NOT NULL,
	address			VARCHAR(256)			NOT NULL,
	city			VARCHAR(256)			NOT NULL,
	state			VARCHAR(256)			NOT NULL,
	zipcode			VARCHAR(256)			NOT NULL,
	PRIMARY KEY		(name)
);

CREATE TABLE orders
(
	orderId 		INT UNSIGNED				NOT NULL AUTO_INCREMENT,
	userId			INT UNSIGNED				NOT NULL,	
	quantity		INT UNSIGNED				NOT NULL,
	tortilla		VARCHAR(256)				NOT NULL,
	rice			INT UNSIGNED				NOT NULL,
	cheese			INT UNSIGNED				NOT NULL,
	beans			INT UNSIGNED				NOT NULL,
	sauces 			INT UNSIGNED				NOT NULL,
	vegs 			INT UNSIGNED				NOT NULL,
	extras			INT UNSIGNED				NOT NULL,
	qSauces 		INT UNSIGNED				NOT NULL,
	PRIMARY KEY		(id),
	FOREIGN KEY		(userId)					REFERENCES users(id)
);

CREATE TABLE prices
(
	category		VARCHAR(256)				NOT NULL,
	name			VARCHAR(256)				NOT NULL,
	prices			DECIMAL(3,2)				NOT NULL
);