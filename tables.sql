CREATE TABLE Guardian
(
		ID INT(11) NOT NULL Auto_Increment,
		First_Name VARCHAR(42) NOT NULL,
		Last_Name VARCHAR(42) NOT NULL,
		Phonenumber VARCHAR(7) NOT NULL,
		Email VARCHAR(42) NOT NULL,
		PRIMARY KEY (ID)
);
CREATE TABLE Users
(
		ID INT(11) NOT NULL Auto_Increment,
		First_Name VARCHAR(42) NOT NULL,
		Last_Name VARCHAR(42) NOT NULL,
		Username VARCHAR(42) NOT NULL,
		Password VARCHAR(50) NOT NULL,
		Socialsecurity VARCHAR(10) NOT NULL,
		Phonenumber VARCHAR(7) NOT NULL,
		Email VARCHAR(42) NOT NULL,
		ID_guardian INT(11),
		PRIMARY KEY (ID),
		FOREIGN KEY (ID_guardian) REFERENCES Guardian(ID)
);
CREATE TABLE Pizza_Topping
(
	ID INT(11) NOT NULL Auto_Increment,
	Topping_Name VARCHAR(42) NOT NULL,
	PRIMARY KEY(ID)
);
CREATE TABLE Pizza_Crust
(
	ID TINYINT(4) NOT NULL,
	Crust_Type VARCHAR(42),
	PRIMARY KEY(ID)
);
CREATE TABLE Pizza_Orders
(
		ID INT(11) NOT NULL Auto_Increment,
		Username VARCHAR(42),
		Topping1 VARCHAR(42) NOT NULL,
		Topping2 VARCHAR(42),
		ID_Topping INT(11) NOT NULL,
		Crust TINYINT(4) NOT NULL,
		PRIMARY KEY(ID),
		FOREIGN KEY(Username) REFERENCES Users(Username),
		FOREIGN KEY(ID_Topping) REFERENCES Pizza_Topping(ID),
		FOREIGN KEY(CRUST) REFERENCES Pizza_Crust(ID)
)