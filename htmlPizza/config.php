


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "pizzaproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (userID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            password VARCHAR(12) NOT NULL,
                            firstName VARCHAR(12) NOT NULL,
                            lastName VARCHAR(25) NOT NULL,
                            eMail VARCHAR(25) NOT NULL,
                            phoneNumber INT(11) NOT NULL,
                            PRIMARY KEY(eMail, userID, phoneNumber));

        CREATE TABLE orders (orderID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                             userID INT(10),
                             pizzaName VARCHAR(10),
                             P_quantity INT(10),
                             additorName VARCHAR(15),
                             A_quantity INT(10),
                             drinkName VARCHAR(10),
                             D_quantity INT(10),
                             PRIMARY KEY(orderID,userID),
                             FOREIGN KEY(userID)REFERENCES users(userID),
                             FOREIGN KEY(pizzaName)REFERENCES pizzaSize(pizzaName),
                             FOREIGN KEY(additorName)REFERENCES additors(additorName),
                             FOREIGN KEY(drinkName)REFERENCES drinks(drinkName),
                             reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
