create table users (userID char(8) UNIQUE not null, password char(12)not null,
                    name char(25) not null,fname char(25),mail char(40) not null,
                    tell INTEGER not null,city char(20),street char(25),flat char(4),
					primary key(mail,password));
					   

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

