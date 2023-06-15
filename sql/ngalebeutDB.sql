CREATE DATABASE ngalebeut;

USE ngalebeut;

CREATE TABLE customer(
	userId INT(100) NOT NULL,
    userName VARCHAR(64) NOT NULL,
    email VARCHAR(128) NOT NULL,
    passphase VARCHAR(32) NOT NULL
);

CREATE TABLE cart(
	cartId INT(100) NOT NULL,
    prodId INT(100) NOT NULL,
    totalPrice INT(128) NOT NULL
);

CREATE TABLE product(
	prodId INT(100) NOT NULL,
    prodName VARCHAR(256) NOT NULL,
    prodPrice INT(128) NOT NULL,
    prodDesc VARCHAR(512) NOT NULL,
    prodImg VARCHAR(128) NOT NULL
);

CREATE TABLE orders(
	orderId INT(100) NOT NULL,
    fullName VARCHAR(128) NOT NULL,
    phoneNumber VARCHAR(32) NOT NULL,
    address VARCHAR(512) NOT NULL,
    notes VARCHAR(1024) NOT NULL
);

CREATE TABLE payment(
	paymentId INT(100) NOT NULL,
    paymentType VARCHAR(128) NOT NULL
);

CREATE TABLE paymentType(
	paymentType VARCHAR(128) NOT NULL,
    cardName VARCHAR(256),
    cardNumber VARCHAR(64),
    expDate DATE,
    ccvNum VARCHAR(4)
);