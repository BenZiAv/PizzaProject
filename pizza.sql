CREATE TABLE users (userID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, password VARCHAR(12)not null,
                    firstName VARCHAR(12) NOT NULL, lastName VARCHAR(25) NOT NULL, eMail VARCHAR(25) NOT NULL,
                    phoneNumber INT(10) NOT NULL,
					PRIMARY KEY(eMail));
					   

CREATE TABLE orders (orderID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, userID INT(10),
                     pizzaName VARCHAR(10),P_quantity INT(10),
					 additorName VARCHAR(15),A_quantity INT(10),
					 drinkName VARCHAR(10),D_quantity INT(10),
					 PRIMARY KEY(orderID,userID),
					 FOREIGN KEY(userID)REFERENCES users(userID),
					 FOREIGN KEY(pizzaName)REFERENCES pizzaSize(pizzaName),
					 FOREIGN KEY(additorName)REFERENCES additors(additorName),
					 FOREIGN KEY(drinkName)REFERENCES drinks(drinkName));