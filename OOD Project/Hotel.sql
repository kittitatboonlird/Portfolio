-- create database first ------------
CREATE DATABASE IF NOT EXISTS `Hotel`;

USE `Hotel`;

CREATE TABLE Person (
	Username        varchar(15) not null,
  	_Password      varchar(15) not null,
	name       varchar(100) not null, 
	Tel        varchar(15) not null,
	primary key (Username),
  	unique (Username)
);

INSERT INTO Person VALUES ("admin","1234","mr.Admin","0811111111");
INSERT INTO Person VALUES ("test1","1234","mr.test","0822222222");

CREATE	TABLE Room_Type (
	Type_Name	varchar(100) not null,
	Type_ID		int(2) not null,
	Picture	varchar(100) not null,
	primary key (Type_ID),
	unique(Type_ID)
);
INSERT INTO Room_Type VALUES ("Test Type 1","01","");
INSERT INTO Room_Type VALUES ("Test Type 2","02","");
INSERT INTO Room_Type VALUES ("Test Type 3","03","");
INSERT INTO Room_Type VALUES ("Test Type 4","04","");

CREATE TABLE Room (
  
	Room_ID        varchar(4) not null, 
	Price      int(10) not null,  
	type       int(2) not null,   
	Description        text not null,  
	Status       varchar(10) not null,   
	primary key (Room_ID),  
	unique (Room_ID),
	foreign key (type) references Room_Type(Type_ID)    
);

INSERT INTO Room VALUES ("R101","1000","01","Test Test Test Test Test","On");

CREATE TABLE Attraction (  
	Title       varchar(100) not null,   
	Picture       varchar(100) not null,   
	Description        text not null,  
	primary key (Title),  
	unique (Title)
);

INSERT INTO Attraction VALUES ("Attraction Test","","TestA TestA TestA TestA TestA");


CREATE TABLE Booking (
    
	Booking_ID      varchar(10) not null,    
	Uname        varchar(15) not null,    
	R_ID         varchar(4)  not null,    
	Price           int(10)     not null,    
    	Check_in_date varchar(15) not null,    
	Check_out_date    varchar(15) not null,   
	primary key(Booking_ID),    
	unique(Booking_ID),    
	foreign key (Uname) references Person(Username),    
	foreign key (R_ID) references Room(Room_ID)

);

INSERT INTO Booking VALUES ("B001","test1","R101","10000","2019-01-01","2019-01-02");


CREATE TABLE Review (
    
	R_Type  int(2),    
	Review  text,    
	foreign key (R_Type) references Room(Type_ID)
);

INSERT INTO Review VALUE ("01","Test Review Test Review Test Review Test Review");