create table users (userID char(8) UNIQUE not null, password char(12)not null,
                    name char(25) not null,fname char(25),mail char(40) not null,
                    tell INTEGER not null,city char(20),street char(25),flat char(4),
					primary key(mail,password));
					
create table pizzaSize (pizzaName char(10)not null, quantity char(4),cost REAL,
                        primary key (PizzaName));
						
create table additors (additorName char(15) not null,quantity char(4), cost REAL,
                        primary key (additorName));
					
create table drinks (drinkName char(10) not null, quantity char(4), cost REAL,
                        primary key (drinkName));

create table deals (dealID char(5)UNIQUE not null, pizzaName char(10), pizzaQuantity char(2),
                    additorsQuantity char(2), drinksQuantity CHAR(2),
                       FOREIGN key(pizzaName)
					   REFERENCES pizzaSize (pizzaName),
					   PRIMARY key (dealID));
					   
create table orders (orderID char(8) UNIQUE not null, userID char(8),
                     pizzaName char(10),P_quantity char(2),
					 additorName char(15),A_quantity char(2),
					 drinkName char(10),D_quantity char(2),
					 dealID char(5),dealQuantity char(2),
					 FOREIGN key(userID)REFERENCES users(userID),
					 FOREIGN key(pizzaName)REFERENCES pizzaSize(pizzaName),
					 FOREIGN key(additorName)REFERENCES additors(additorName),
					 FOREIGN key(drinkName)REFERENCES drinks(drinkName),
					 FOREIGN key(dealID)REFERENCES deals(dealID),
					 PRIMARY key(orderID,userID));
	
	/* order for guests of siet*/				 
create table orderNOuser (orderID char(10) UNIQUE not null,
                          pizzaName char(10),P_quantity char(2),
					 additorName char(15),A_quantity char(2),
					 drinkName char(10),D_quantity char(2),
					 dealID char(5),dealQuantity char(2),
					 name char(25) not null,tell char(10) not null,
					 tell INTEGER not null,city char(20),street char(25),flat char(4),
					 FOREIGN key(userID)REFERENCES users(userID),
					 FOREIGN key(pizzaName)REFERENCES pizzaSize(pizzaName),
					 FOREIGN key(additorName)REFERENCES additors(additorName),
					 FOREIGN key(drinkName)REFERENCES drinks(drinkName),
					 FOREIGN key(dealID)REFERENCES deals(dealID),
					 
create table usersHistory (	orderID char(10)not null, userID char(8) not null,
                            delivaryDay DATE char(10),
                            foreign key(orderID)REFERENCES orders(orderID),
							foreign key(userID)REFERENCES users(userID),
							primary key(orderID,userID));
							

					
							
create table ADMIN (Aid char(10) not null,name char(10),
					orderID char(10),orderID char(10),  /* get orders from users and guests not same keys and length*/
					dealID char(5),drinkName char(10),additorName char(15),pizzaName char(10),
					userID char(8),
					 FOREIGN key(userID)REFERENCES users(userID),
					 FOREIGN key(pizzaName)REFERENCES pizzaSize(pizzaName),
					 FOREIGN key(additorName)REFERENCES additors(additorName),
					 FOREIGN key(drinkName)REFERENCES drinks(drinkName),
					 FOREIGN key(dealID)REFERENCES deals(dealID),
					 FOREIGN key(orderID)REFERENCES orders(orderID),
					 FOREIGN key(orderID)REFERENCES orderNOuser(orderID),
					 FOREIGN key(orderID)REFERENCES usersHistory(orderID),
                     primary key(Aid,name));



