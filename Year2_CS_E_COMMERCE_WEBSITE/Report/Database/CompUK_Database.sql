--PLease run it step by step
--Step 1

CREATE DATABASE CompUK;

--Step 2

CREATE TABLE CompUK.Account(
User_ID int PRIMARY KEY AUTO_INCREMENT,
User_FName VARCHAR(20) NOT NULL,
User_SName VARCHAR(20) NOT NULL,
User_Sex ENUM('Male','Female'),
User_DOB DATE,
User_Status ENUM('Customer','RegAdmin','Admin'),
User_Password VARCHAR(30) NOT NULL
);

--Step 3

CREATE TABLE CompUK.Contact_details(
Contacts_ID int PRIMARY KEY AUTO_INCREMENT,
User_Email VARCHAR(30) NOT NULL,
User_Phone_Number INT(10) NOT NULL,
User_ID  int NOT NULL,
FOREIGN KEY (User_ID) REFERENCES CompUK.Account(User_ID)
);

--Step 4

CREATE TABLE CompUK.Delivery_address(
ZIP  VARCHAR(7) NOT NULL,
City  VARCHAR(20) NOT NULL,
Country VARCHAR(20) NOT NULL,
Street VARCHAR(20) NOT NULL,
Address_ID int PRIMARY KEY AUTO_INCREMENT,
User_ID  int NOT NULL,
FOREIGN KEY (User_ID) REFERENCES CompUK.Account(User_ID)
);

--Step 5

CREATE TABLE CompUK.Order(
Order_ID int PRIMARY KEY AUTO_INCREMENT,
Order_Status ENUM('Basket','InProcess','Shiped','Delivered'),
Total_Price INT(10) NOT NULL,
User_ID  int NOT NULL,
FOREIGN KEY (User_ID) REFERENCES CompUK.Account(User_ID),
Address_ID  int NOT NULL,
FOREIGN KEY (Address_ID) REFERENCES CompUK.Delivery_address(Address_ID)
);

--Step 6

CREATE TABLE CompUK.Category(
Cat_ID int PRIMARY KEY AUTO_INCREMENT,
Cat_Name  VARCHAR(20) NOT NULL
)

--Step 7

CREATE TABLE CompUK.Manufacture(
Man_ID int PRIMARY KEY AUTO_INCREMENT,
Man_Name  VARCHAR(20) NOT NULL
)

--Step 8

CREATE TABLE CompUK.Warehouse(
Warehouse_ID int PRIMARY KEY AUTO_INCREMENT,
Warehouse_Name  VARCHAR(20) NOT NULL
)

--Step 9

CREATE TABLE CompUK.Product(
Product_ID int PRIMARY KEY AUTO_INCREMENT,
Product_Name  VARCHAR(30) NOT NULL,
Product_Discount INT(3) NOT NULL,
Product_Price INT(7) NOT NULL,
Man_ID  int NOT NULL,
FOREIGN KEY (Man_ID) REFERENCES CompUK.Manufacture(Man_ID),
Cat_ID  int NOT NULL,
FOREIGN KEY (Cat_ID) REFERENCES CompUK.Category(Cat_ID)
)

--Step 10

CREATE TABLE CompUK.Linked_Warehouse_and_Products(
Product_Stock INT(10) NOT NULL,
Product_ID  int NOT NULL,
FOREIGN KEY (Product_ID) REFERENCES CompUK.Product(Product_ID),
Warehouse_ID  int NOT NULL,
FOREIGN KEY (Warehouse_ID) REFERENCES CompUK.Warehouse(Warehouse_ID)
)

--Step 11

CREATE TABLE CompUK.Linked_Order_and_Products(
Amount_Product INT(2) NOT NULL,
Product_ID  int NOT NULL,
FOREIGN KEY (Product_ID) REFERENCES CompUK.Product(Product_ID),
Order_ID  int NOT NULL,
FOREIGN KEY (Order_ID) REFERENCES CompUK.Order(Order_ID)
)

--For testing (DONT RUN IT)
DROP DATABASE  CompUK;