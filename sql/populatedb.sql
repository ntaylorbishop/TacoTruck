##File to populate DB with

##Populating Users

INSERT INTO `Users` VALUES ('1', 'Bobby', 'Dickerson', 'BobbyDDickerson@armyspy.com', 'oom1duH0quei', '310-706-5713', 'Visa', '4581172250956295');
INSERT INTO `Users` VALUES ('2', 'John', 'Horan', 'JohnMHoran@cuvox.de', 'uM0zohG5', '802-906-9635', 'Visa', '4833554465137429');
INSERT INTO `Users` VALUES ('3', 'Lula', 'Benjamin', 'LulaTBenjamin@einrot.com', 'ohF0zooquu1', '641-740-3120', 'Visa', '4173199486453080');
INSERT INTO `Users` VALUES ('4', 'Franklin', 'Hills', 'FranklinIHills@rhyta.com', 'eeWahXo5ee', '402-647-8591', 'Visa', '4937182773835950');
INSERT INTO `Users` VALUES ('5', 'Samuel', 'Blevins', 'SamuelCBlevins@cuvox.de', 'TaeXo2OoV8u', '815-982-3812', 'American Express', '379823789416348');
INSERT INTO `Users` VALUES ('6', 'William', 'Raymond', 'WilliamRRaymond@cuvox.de', 'Jiech8aiCh', '732-432-0200', 'American Express', '345650978113056');
INSERT INTO `Users` VALUES ('7', 'Janice', 'Robertson', 'JaniceRRobertson@superrito.com', 'kohgae4OeGh', '479-214-4112', 'American Express', '375651072455574');
INSERT INTO `Users` VALUES ('8', 'Lashawn', 'Lambert', 'LashawnTLambert@einrot.com', 'Lu0icho2yee', '859-955-0616', 'American Express', '342691124360073');
INSERT INTO `Users` VALUES ('9', 'Vanessa', 'Seals', 'VanessaGSeals@dayrep.com', 'tooWee3Mo6ae', '417-629-4257', 'Mastercard', '5513462587501850');
INSERT INTO `Users` VALUES ('10', 'Bethany', 'Tong', 'BethanyETong@dayrep.com', 'ahC7Veigha', '937-260-7087', 'Mastercard', '5345523630534291');

##Populating Locations

INSERT INTO `Locations` VALUES ('Klyde Warren Park', '2012 Woodall Rodgers Fwy', 'Dallas', 'TX', '75201');
INSERT INTO `Locations` VALUES ('Southern Methodist Unversity', '6425 Boaz Lane', 'Dallas', 'TX', '75205');
INSERT INTO `Locations` VALUES ('Addison Circle Park', 'Addison Circle', 'Addison', 'TX', '75001');
INSERT INTO `Locations` VALUES ('Truck Yard', '5624 Sears St', 'Dallas', 'TX', '75206');
INSERT INTO `Locations` VALUES ('Deep Ellum', '2630 Commerce St', 'Dallas', 'TX', '75226');

##Populating Orders

INSERT INTO `Orders` VALUES ('1', '1', '12/22/2014 5:57:19', '$68.15');
INSERT INTO `Orders` VALUES ('2', '1', '1/14/2015 6:56:35', '$28.51');
INSERT INTO `Orders` VALUES ('3', '2', '12/23/2013 12:50:40', '$91.76');
INSERT INTO `Orders` VALUES ('4', '2', '4/27/2013 8:41:09', '$23.46');
INSERT INTO `Orders` VALUES ('5', '3', '2/13/2014 18:33:08', '$9.26');
INSERT INTO `Orders` VALUES ('6', '3', '10/6/2013 2:07:47', '$51.78');
INSERT INTO `Orders` VALUES ('7', '4', '12/9/2014 1:25:38', '$18.32');
INSERT INTO `Orders` VALUES ('8', '4', '5/11/2013 16:03:37', '$21.24');
INSERT INTO `Orders` VALUES ('9', '5', '9/19/2014 15:17:08', '$98.65');
INSERT INTO `Orders` VALUES ('10', '5', '6/20/2014 9:29:33', '$20.1');
INSERT INTO `Orders` VALUES ('11', '6', '3/25/2013 1:03:52', '$22.82');
INSERT INTO `Orders` VALUES ('12', '6', '1/20/2014 0:59:20', '$75.48');
INSERT INTO `Orders` VALUES ('13', '7', '9/27/2014 12:52:10', '$52.44');
INSERT INTO `Orders` VALUES ('14', '7', '1/8/2015 3:47:51', '$60.46');
INSERT INTO `Orders` VALUES ('15', '8', '10/19/2013 8:53:41', '$22.7');
INSERT INTO `Orders` VALUES ('16', '8', '7/29/2014 10:15:40', '$60.6');
INSERT INTO `Orders` VALUES ('17', '9', '7/9/2014 7:47:40', '$70.42');
INSERT INTO `Orders` VALUES ('18', '9', '2/27/2014 19:49:39', '$27.05');
INSERT INTO `Orders` VALUES ('19', '10', '5/23/2014 16:23:46', '$32.9');
INSERT INTO `Orders` VALUES ('20', '10', '5/22/2013 5:16:24', '$44.23');
INSERT INTO `Orders` VALUES ('21', '1', '7/14/2014 14:44:12', '$37.92');
INSERT INTO `Orders` VALUES ('22', '2', '9/25/2013 12:17:35', '$18.76');
INSERT INTO `Orders` VALUES ('23', '3', '2/21/2014 9:49:30', '$34.4');
INSERT INTO `Orders` VALUES ('24', '4', '5/8/2014 2:34:09', '$75.92');
INSERT INTO `Orders` VALUES ('25', '5', '10/28/2014 19:26:35', '$69.64');
INSERT INTO `Orders` VALUES ('26', '6', '5/22/2013 0:51:56', '$13.3');
INSERT INTO `Orders` VALUES ('27', '7', '2/28/2014 12:10:06', '$1.69');
INSERT INTO `Orders` VALUES ('28', '8', '1/16/2014 14:24:49', '$56.42');
INSERT INTO `Orders` VALUES ('29', '9', '3/21/2013 9:28:10', '$15.94');

##Populating OrderItem

INSERT INTO `OrderItem` VALUES ('1', '1', '1');
INSERT INTO `OrderItem` VALUES ('2', '1', '2');
INSERT INTO `OrderItem` VALUES ('3', '1', '1');
INSERT INTO `OrderItem` VALUES ('4', '1', '2');
INSERT INTO `OrderItem` VALUES ('5', '2', '2');
INSERT INTO `OrderItem` VALUES ('6', '2', '2');
INSERT INTO `OrderItem` VALUES ('7', '2', '2');
INSERT INTO `OrderItem` VALUES ('8', '2', '3');
INSERT INTO `OrderItem` VALUES ('9', '3', '1');
INSERT INTO `OrderItem` VALUES ('10', '3', '1');
INSERT INTO `OrderItem` VALUES ('11', '3', '1');
INSERT INTO `OrderItem` VALUES ('12', '3', '1');
INSERT INTO `OrderItem` VALUES ('13', '4', '1');
INSERT INTO `OrderItem` VALUES ('14', '4', '1');
INSERT INTO `OrderItem` VALUES ('15', '4', '1');
INSERT INTO `OrderItem` VALUES ('16', '4', '3');
INSERT INTO `OrderItem` VALUES ('17', '5', '2');
INSERT INTO `OrderItem` VALUES ('18', '5', '1');
INSERT INTO `OrderItem` VALUES ('19', '5', '2');
INSERT INTO `OrderItem` VALUES ('20', '5', '3');

##Populating Menu

INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('type', 'Steak', '1', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('type', 'Chicken', '0.75', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('type', 'Carnitas', '1', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('type', 'Veggie', '0.5', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('tortillas', 'Flour', '0.25', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('tortillas', 'Cayenne', '0.35', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('tortillas', 'Wheat', '0.35', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('tortillas', 'Spinach', '0.3', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('rice', 'Cilantro Rice', '0.25', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('rice', 'Spanish Rice', '0.25', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('cheese', 'Queso Fresco', '0.5', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('cheese', 'Cheddar/Jack Mix', '0.35', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('cheese', 'Monterrey Jack', '0.35', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('beans', 'Refried Beans', '0.35', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('beans', 'Whole Pinto Beans', '0.25', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('beans', 'Black Beans', '0.1', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Hot Tomatillo', '0', '3');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Death', '0', '4');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Fresh Lime Juice', '0', '1');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Bad Ass BBQ', '0', '2');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Mild Tomatillo', '0', '2');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Ranch', '0', '1');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'No Sauce', '0', '0');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Habenero', '0', '3');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Salsa', '0', '2');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Ancho', '0', '1');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Tomatillo', '0', '1');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('sauces', 'Herb Vinigrette', '0', '1');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Poblano Salsa', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Roasted Garlic', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Peppers/Onions', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Red Onion', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Jalapenos', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Pico de Gallo', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'White Onion', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Tomatoes', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Cilantro', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Tortilla Strips', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('vegetables', 'Lettuce', '0', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('extras', 'X - Extra Meat/Veggies', '1', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('extras', 'Sour Cream', '0.75', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('extras', 'Guacamole', '0.75', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('extras', 'Queso', '0.5', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('extras', 'Sliced Avocado', '0.75', '');
INSERT INTO `Menu` (`itemType`, `name`, `price`, `heatRating`)  VALUES ('extras', 'Bacon', '0.5', '');

##Populating OrderItemDetails

DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 61;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 62;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 63;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 64;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 65;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 66;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 67;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 68;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 69;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 70;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 71;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 72;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 73;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 74;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 75;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 76;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 77;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 78;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 79;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 80;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 81;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 82;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 83;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 84;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 85;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 86;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 87;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 88;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 89;
DELETE FROM `tacotruck`.`OrderItemDetails` WHERE `OrderItemDetails`.`OrderItemDetailId` = 90;

##uoaeueoaueo