###Creating database and tables

DROP DATABASE IF EXISTS tacotruck;

CREATE DATABASE tacotruck;
USE tacotruck;

/*
Table: Users
Info:
	UserId - auto incremented 
	GivenName - First name of user
	Surname - Last name of user 
	EmailAddress - Valid email used to confirm user
	Password - Used to login to the website. Hashed into bin
	TelephoneNumber - Telephone number of user
	CC_Provider - Type of credit card being used; IE Visa
	CC_Number - Credit card number. Hashed
*/
CREATE TABLE users  
(
	UserId 				INT UNSIGNED			NOT NULL AUTO_INCREMENT,
	GivenName			VARCHAR(256)			NOT NULL,
	LastName			VARCHAR(256)			NOT NULL,
	EmailAddress		VARCHAR(256)			NOT NULL,
	Password 			VARCHAR(255)			NOT NULL,
	CC_Provider			VARCHAR(255)			NOT NULL,
	CC_Number			VARCHAR(255)			NOT NULL,			
	PRIMARY KEY 		(UserId)
);

/*
Table: Locations
*/
CREATE TABLE Locations
(
	name			VARCHAR(256)			NOT NULL,
	address			VARCHAR(256)			NOT NULL,
	city			VARCHAR(100)			NOT NULL,
	state			VARCHAR(2)				NOT NULL,
	zipcode			INT UNSIGNED			NOT NULL,
	PRIMARY KEY		(name)
);

/*
OrderId,UserId,Date,Total
Table: Orders
Info:
	OrderId - ID for one specific order
	UserId - ID of user who made the order
	Date - Date order was made
	Total - Price total for order
*/
CREATE TABLE Orders
(
	OrderId 		INT UNSIGNED 				NOT NULL AUTO_INCREMENT,
	UserId 			INT UNSIGNED 				NOT NULL,
	Date 			VARCHAR(64) 				NOT NULL,
	Total 			DECIMAL(3,2)				NOT NULL,
	PRIMARY KEY 	(OrderId),
	FOREIGN KEY 	(UserId)					REFERENCES Users(UserId)
)

/*
Table: OrderItem
Info:
	OrderItemId - ID of taco
	OrderId - ID of one order
	Quantity - Quantity of taco
*/
CREATE TABLE OrderItem 
(
	OrderItemId		INT UNSIGNED				NOT NULL AUTO_INCREMENT,
	OrderId 		INT UNSIGNED				NOT NULL,
	Quantity 		INT UNSIGNED				NOT NULL,
	PRIMARY KEY 	(OrderItemId),
	FOREIGN KEY 	(OrderId) 					REFERENCES Orders(OrderId)
);


CREATE TABLE menu 
(
    TacoFixinId   	INT(11)         		NOT NULL AUTO_INCREMENT,
    itemType 		VARCHAR(255) 			NOT NULL,
    name 			VARCHAR(255) 			NOT NULL,
    price 			int(11) 				NOT NULL,
    heatRating 		VARCHAR(11) 			DEFAULT '-1',
    PRIMARY KEY 	(tacoFixinId)
)

/*
Table: OrderItemDetails
Info:
	OrderItemDetailId - Id for details : Primary Key
	OrderItemId - Id for a specific taco
	TacoFixinId - Id to reference a particular topping
*/
CREATE TABLE OrderItemDetails
(
	OrderItemDetailId	INT UNSIGNED			NOT NULL AUTO_INCREMENT,
	OrderItemId 		INT UNSIGNED 			NOT NULL,
	TacoFixinId 		INT UNSIGNED 			NOT NULL,
	PRIMARY KEY 		(OrderItemDetailId),
	FOREIGN KEY 		(tacoFixinId) 			REFERENCES menu(tacoFixinId)
);