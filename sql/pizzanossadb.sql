CREATE DATABASE PIZZANOSSADB;

USE PIZZANOSSADB;

CREATE TABLE ORDERPIZZA (
	ID INT AUTO_INCREMENT NOT NULL,
    DAYDATE DATE NOT NULL,
    WHOLESLICEPIZZA VARCHAR(15) NOT NULL,
    NUMBERPIZZA INT NOT NULL,
    SHAPE VARCHAR(15) NOT NULL,
    SIZE VARCHAR(15) NOT NULL,
    TOPPINGS VARCHAR(255) NOT NULL,    
    STYLECRUST VARCHAR(15) NOT NULL,    
    TYPEDELIVERY VARCHAR(15) NOT NULL,
    FNAME VARCHAR(15) NOT NULL,
    LNAME VARCHAR(30) NOT NULL,
    PNUMBER VARCHAR(15) NOT NULL,
    C_ADDRESS VARCHAR(100) NOT NULL,
    ADDITIONAL TEXT,
    PRIMARY KEY (ID)
);

INSERT INTO ORDERPIZZA (DAYDATE, WHOLESLICEPIZZA, NUMBERPIZZA, SHAPE, SIZE, TOPPINGS, STYLECRUST, TYPEDELIVERY, FNAME, LNAME, PNUMBER, C_ADDRESS)
VALUES
('2023-09-24', 'Whole Pizza', 2, 'Round', 'Large', 'Pepperoni', 'Thin crust', 'Delivery', 'John', 'Doe', '(647)111-5555', '123 Main St, Toronto, On');

INSERT INTO ORDERPIZZA (DAYDATE, WHOLESLICEPIZZA, NUMBERPIZZA, SHAPE, SIZE, TOPPINGS, STYLECRUST, TYPEDELIVERY, FNAME, LNAME, PNUMBER, C_ADDRESS, ADDITIONAL)
VALUES
	('2023-09-24', 'Whole Pizza', 1, 'Round', 'Large', 'Pepperoni, Cheese', 'Thin Crust', 'Delivery', 'John', 'Doe', '(647)111-5555', '123 Main St, Toronto, On', 'Extra cheese.'),
	('2023-09-26', 'Slice', 3, 'Slice', 'Slice', 'Tomato, Mozzarella', 'Thin Crust', 'Delivery', 'Sam', 'Johnson', '(647)222-7777', '789 Oak St, Toronto, On', 'Gluten-free crust required.'),
	('2023-09-27', 'Slice', 2, 'Slice', 'Slice', 'Tomato, Mushrroms', 'Thick crust', 'Takeout', 'Maria', 'Garcia', '(647)333-8888', '101 Pine St, Toronto, On', 'Extra cheese.'),
	('2023-09-28', 'Whole Pizza', 1, 'Square', 'Medium', 'Magherita, Onions', 'Deep dish', 'Delivery', 'Robert', 'Lee', '(647)444-9999', '555 Maple St, Toronto, On', 'Extra cheese.');

SELECT * FROM ORDERPIZZA;